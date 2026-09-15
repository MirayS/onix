<?php

declare(strict_types=1);

namespace MirayS\Onix\Tools;

use DOMDocument;
use DOMElement;
use DOMXPath;

final class ElementDefinition
{
    public function __construct(
        public string $name,
        public string $short = '',
        public string $kind = 'scalar',
        public ?string $codeList = null,
        public string $scalarType = 'string',
        public array $children = [],
        public string $documentation = '',
        public bool $deprecated = false,
    ) {
    }
}

final class SchemaReader
{
    private const XS = 'http://www.w3.org/2001/XMLSchema';

    private DOMXPath $xpath;

    private array $groups = [];

    public function __construct(string $file)
    {
        $document = new DOMDocument();
        $document->load($file, LIBXML_NONET | LIBXML_PARSEHUGE);

        $this->xpath = new DOMXPath($document);
        $this->xpath->registerNamespace('xs', self::XS);

        foreach ($this->xpath->query('/xs:schema/xs:group') as $group) {
            if ($group instanceof DOMElement) {
                $this->groups[$group->getAttribute('name')] = $group;
            }
        }
    }

    public function elements(): array
    {
        $elements = [];

        foreach ($this->xpath->query('/xs:schema/xs:element') as $node) {
            if (!$node instanceof DOMElement) {
                continue;
            }

            $definition = $this->read($node);
            $elements[$definition->name] = $definition;
        }

        return $elements;
    }

    private function read(DOMElement $node): ElementDefinition
    {
        $definition = new ElementDefinition($node->getAttribute('name'));
        $definition->documentation = $this->documentation($node);
        $definition->deprecated = stripos($definition->documentation, 'deprecated') !== false;

        $complexType = $this->child($node, 'complexType');

        if ($complexType === null) {
            return $definition;
        }

        $definition->short = $this->shortName($complexType);

        $simpleContent = $this->child($complexType, 'simpleContent');

        if ($simpleContent !== null) {
            $extension = $this->child($simpleContent, 'extension');
            $base = $extension?->getAttribute('base') ?? '';

            if (preg_match('/^List(\d+)$/', $base, $matches) === 1) {
                $definition->kind = 'codelist';
                $definition->codeList = $matches[1];
            } elseif ($this->hasAttributeGroup($extension, 'dateformatAttribute')) {
                $definition->kind = 'date';
            } elseif ($this->hasAttributeGroup($extension, 'textformatAttribute')) {
                $definition->kind = 'text';
            } else {
                $definition->kind = 'scalar';
                $definition->scalarType = $this->scalarType($base);
            }

            return $definition;
        }

        if ($this->child($complexType, 'complexContent') !== null) {
            $definition->kind = 'text';

            return $definition;
        }

        $children = $this->collectChildren($complexType, false);

        if ($children !== []) {
            $definition->kind = 'composite';
            $definition->children = $children;

            return $definition;
        }

        $definition->kind = 'flag';

        return $definition;
    }

    private function collectChildren(DOMElement $node, bool $repeatableContext): array
    {
        $children = [];

        foreach ($node->childNodes as $child) {
            if (!$child instanceof DOMElement || $child->namespaceURI !== self::XS) {
                continue;
            }

            $repeatable = $repeatableContext || $this->isRepeatable($child);

            switch ($child->localName) {
                case 'sequence':
                case 'choice':
                case 'all':
                    foreach ($this->collectChildren($child, $repeatable) as $name => $isRepeatable) {
                        $children[$name] = ($children[$name] ?? false) || $isRepeatable;
                    }

                    break;

                case 'group':
                    $ref = $child->getAttribute('ref');
                    $group = $this->groups[$ref] ?? null;

                    if ($group !== null) {
                        foreach ($this->collectChildren($group, $repeatable) as $name => $isRepeatable) {
                            $children[$name] = ($children[$name] ?? false) || $isRepeatable;
                        }
                    }

                    break;

                case 'element':
                    $ref = $child->getAttribute('ref');

                    if ($ref !== '') {
                        $children[$ref] = ($children[$ref] ?? false) || $repeatable;
                    }

                    break;
            }
        }

        return $children;
    }

    private function isRepeatable(DOMElement $node): bool
    {
        $max = $node->getAttribute('maxOccurs');

        return $max === 'unbounded' || ($max !== '' && (int) $max > 1);
    }

    private function hasAttributeGroup(?DOMElement $node, string $name): bool
    {
        if ($node === null) {
            return false;
        }

        foreach ($this->xpath->query('.//xs:attributeGroup', $node) as $group) {
            if ($group instanceof DOMElement && $group->getAttribute('ref') === $name) {
                return true;
            }
        }

        return false;
    }

    private function scalarType(string $base): string
    {
        return match ($base) {
            'dt.PositiveInteger', 'dt.PositiveIntegerOrZero', 'dt.Integer', 'dt.Year' => 'int',
            default => 'string',
        };
    }

    private function shortName(DOMElement $complexType): string
    {
        foreach ($this->xpath->query('.//xs:attribute[@name="shortname"]//xs:enumeration', $complexType) as $enumeration) {
            if ($enumeration instanceof DOMElement) {
                return $enumeration->getAttribute('value');
            }
        }

        return '';
    }

    private function documentation(DOMElement $node): string
    {
        $parts = [];

        foreach ($this->xpath->query('./xs:annotation/xs:documentation', $node) as $documentation) {
            $parts[] = trim($documentation->textContent);
        }

        return implode(' ', $parts);
    }

    private function child(DOMElement $node, string $name): ?DOMElement
    {
        foreach ($node->childNodes as $child) {
            if ($child instanceof DOMElement && $child->namespaceURI === self::XS && $child->localName === $name) {
                return $child;
            }
        }

        return null;
    }
}
