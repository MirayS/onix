<?php

declare(strict_types=1);

namespace MirayS\Onix\Hydration;

use DOMElement;
use DOMNode;
use MirayS\Onix\CodeList\CodeList;
use MirayS\Onix\Date;
use MirayS\Onix\Schema\ElementSchema;
use MirayS\Onix\Tag\TagMap;
use MirayS\Onix\Text;

final class Hydrator
{
    private ?string $release = null;

    private bool $validateRelease = false;

    public function __construct(
        private readonly string $language,
        private readonly IssueCollector $issues,
    ) {
    }

    public function setRelease(?string $release): void
    {
        $this->release = $release;
    }

    public function setValidateRelease(bool $validateRelease): void
    {
        $this->validateRelease = $validateRelease;
    }

    public function hydrate(DOMElement $node, string $class, string $path = ''): object
    {
        $object = new $class();
        $metadata = ClassMetadataFactory::for($class);
        $seen = [];

        foreach ($node->childNodes as $child) {
            if (!$child instanceof DOMElement) {
                continue;
            }

            $element = TagMap::toReference($child->localName);
            $key = strtolower($element);
            $childPath = $path . '/' . $element;
            $property = $metadata[$key] ?? null;

            if ($property === null) {
                $this->issues->add(
                    Issue::UNKNOWN_ELEMENT,
                    $childPath,
                    sprintf('Element is not mapped in %s', $class),
                );

                continue;
            }

            $this->checkRelease($element, $childPath);

            if (!$property->collection && isset($seen[$key])) {
                $this->issues->add(
                    Issue::DUPLICATE_ELEMENT,
                    $childPath,
                    'Repeated element for a non-repeatable property, first occurrence kept',
                );

                continue;
            }

            $value = $this->convert($child, $property, $childPath);

            if ($value === null) {
                continue;
            }

            $seen[$key] = true;
            $object->{$property->method}($value);
        }

        return $object;
    }

    private function checkRelease(string $element, string $path): void
    {
        if (!$this->validateRelease || $this->release === null || !ElementSchema::has($element)) {
            return;
        }

        if (ElementSchema::isInRelease($element, $this->release)) {
            return;
        }

        $this->issues->add(
            Issue::RELEASE_MISMATCH,
            $path,
            sprintf(
                'Element is not part of ONIX %s (defined in %s)',
                $this->release,
                implode(', ', ElementSchema::releases($element)) ?: 'no release',
            ),
        );
    }

    private function convert(DOMElement $node, PropertyMetadata $property, string $path): mixed
    {
        $class = $property->className;

        if ($class === null) {
            return $this->castScalar(trim($node->textContent), $property, $path);
        }

        if (is_a($class, CodeList::class, true)) {
            return $this->resolveCode($node, $class, $path);
        }

        if ($class === Date::class) {
            return $this->parseDate($node, $path);
        }

        if ($class === Text::class) {
            return $this->buildText($node);
        }

        return $this->hydrate($node, $class, $path);
    }

    private function castScalar(string $value, PropertyMetadata $property, string $path): string|int|float|bool|null
    {
        return match ($property->builtinType) {
            'int' => is_numeric($value) ? (int) $value : $this->reject($value, $path, 'int'),
            'float' => is_numeric($value) ? (float) $value : $this->reject($value, $path, 'float'),
            'bool' => $value === '' || (strtolower($value) !== 'false' && $value !== '0'),
            default => $value,
        };
    }

    private function reject(string $value, string $path, string $type): null
    {
        $this->issues->add(
            Issue::INVALID_VALUE,
            $path,
            sprintf('Value %s is not a valid %s', var_export($value, true), $type),
        );

        return null;
    }

    private function resolveCode(DOMElement $node, string $class, string $path): ?CodeList
    {
        $code = trim($node->textContent);

        if ($code === '') {
            $this->issues->add(Issue::INVALID_VALUE, $path, 'Empty code value');

            return null;
        }

        $codeList = $class::resolve($code, $this->language);

        if (!$codeList->isKnown()) {
            $this->issues->add(
                Issue::UNKNOWN_CODE,
                $path,
                sprintf('Code %s is not present in %s (%s)', $code, $class, $this->language),
            );
        }

        return $codeList;
    }

    private function parseDate(DOMElement $node, string $path): ?Date
    {
        $value = trim($node->textContent);

        if ($value === '') {
            return null;
        }

        $format = $node->getAttribute('dateformat');

        try {
            return Date::parse($value, $format !== '' ? $format : null);
        } catch (\Throwable $exception) {
            $this->issues->add(Issue::INVALID_VALUE, $path, $exception->getMessage());

            return null;
        }
    }

    private function buildText(DOMElement $node): Text
    {
        $format = $node->getAttribute('textformat');
        $language = $node->getAttribute('language');

        return new Text(
            $this->innerContent($node),
            $format !== '' ? $format : Text::TYPE_DEFAULT,
            $language !== '' ? $language : null,
        );
    }

    private function innerContent(DOMElement $node): string
    {
        $hasMarkup = false;

        foreach ($node->childNodes as $child) {
            if ($child instanceof DOMElement) {
                $hasMarkup = true;

                break;
            }
        }

        if (!$hasMarkup) {
            return $node->textContent;
        }

        $content = '';

        foreach ($node->childNodes as $child) {
            $content .= $this->serialize($child);
        }

        return $content;
    }

    private function serialize(DOMNode $node): string
    {
        return $node->ownerDocument?->saveXML($node) ?? '';
    }
}
