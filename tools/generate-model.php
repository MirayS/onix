<?php

declare(strict_types=1);

require __DIR__ . '/SchemaReader.php';

use MirayS\Onix\Tools\ElementDefinition;
use MirayS\Onix\Tools\SchemaReader;

const TRAITS = [
    'ONIXMessage' => ['MirayS\\Onix\\Support\\MessageShortcuts'],
    'Product' => ['MirayS\\Onix\\Support\\ProductShortcuts'],
    'DescriptiveDetail' => ['MirayS\\Onix\\Support\\MeasureShortcuts', 'MirayS\\Onix\\Support\\TitleShortcuts'],
    'Contributor' => ['MirayS\\Onix\\Support\\ContributorShortcuts'],
    'TitleElement' => ['MirayS\\Onix\\Support\\TitleElementShortcuts'],
    'CollateralDetail' => ['MirayS\\Onix\\Support\\CollateralShortcuts'],
];

const CLASS_ALIASES = ['ONIXMessage' => 'Message'];

$root = dirname(__DIR__);
$schemaDir = $argv[1] ?? null;

if ($schemaDir === null || !is_dir($schemaDir)) {
    fwrite(STDERR, "usage: php tools/generate-model.php <directory with ONIX XSDs>\n");

    exit(1);
}

$file31 = findSchema($schemaDir, '3.1_reference');
$file30 = findSchema($schemaDir, '3.0_reference');

$elements31 = (new SchemaReader($file31))->elements();
$elements30 = (new SchemaReader($file30))->elements();

$all = $elements31;

foreach ($elements30 as $name => $definition) {
    if (!isset($all[$name])) {
        $all[$name] = $definition;
    }
}

$namespaces = assignNamespaces($all);

writeTagMap($root, $all, $elements30);
writeSchema($root, $all, $elements31, $elements30, $namespaces);
writeClasses($root, $all, $elements31, $elements30, $namespaces);

echo sprintf(
    "generated %d elements, %d classes\n",
    count($all),
    count(array_filter($all, static fn (ElementDefinition $d): bool => $d->kind === 'composite')),
);

function findSchema(string $directory, string $needle): string
{
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

    foreach ($iterator as $file) {
        if ($file->isFile() && str_contains($file->getFilename(), $needle) && $file->getExtension() === 'xsd') {
            return $file->getPathname();
        }
    }

    throw new RuntimeException(sprintf('Schema %s not found in %s', $needle, $directory));
}

function assignNamespaces(array $elements): array
{
    $product = reachable($elements, 'Product');
    $message = reachable($elements, 'ONIXMessage');

    $namespaces = [];

    foreach (array_keys($elements) as $name) {
        if (isset($product[$name])) {
            $namespaces[$name] = 'MirayS\\Onix\\Product';
        } elseif (isset($message[$name])) {
            $namespaces[$name] = 'MirayS\\Onix\\Message';
        } else {
            $namespaces[$name] = 'MirayS\\Onix\\Product';
        }
    }

    return $namespaces;
}

function reachable(array $elements, string $start): array
{
    $seen = [];
    $queue = [$start];

    while ($queue !== []) {
        $name = array_shift($queue);

        if (isset($seen[$name]) || !isset($elements[$name])) {
            continue;
        }

        $seen[$name] = true;

        foreach (array_keys($elements[$name]->children) as $child) {
            $queue[] = $child;
        }
    }

    return $seen;
}

function className(string $element): string
{
    return CLASS_ALIASES[$element] ?? $element;
}

function writeTagMap(string $root, array $elements, array $elements30): void
{
    $map = [];

    foreach ($elements as $name => $definition) {
        if ($definition->short !== '') {
            $map[strtolower($definition->short)] = $name;
        }
    }

    foreach ($elements30 as $name => $definition) {
        if ($definition->short !== '' && !isset($map[strtolower($definition->short)])) {
            $map[strtolower($definition->short)] = $name;
        }
    }

    ksort($map);

    $entries = '';

    foreach ($map as $short => $reference) {
        $entries .= sprintf("        '%s' => '%s',\n", $short, $reference);
    }

    $code = <<<PHP
    <?php

    declare(strict_types=1);

    namespace MirayS\Onix\Tag;

    final class TagMap
    {
        private const SHORT_TO_REF = [
    {$entries}    ];

        private static ?array \$refToShort = null;

        public static function toReference(string \$localName): string
        {
            return self::SHORT_TO_REF[strtolower(\$localName)] ?? \$localName;
        }

        public static function toShort(string \$referenceName): string
        {
            self::\$refToShort ??= array_flip(self::SHORT_TO_REF);

            return self::\$refToShort[\$referenceName] ?? \$referenceName;
        }

        public static function isShort(string \$localName): bool
        {
            return isset(self::SHORT_TO_REF[strtolower(\$localName)]);
        }

        public static function all(): array
        {
            return self::SHORT_TO_REF;
        }
    }

    PHP;

    file_put_contents($root . '/src/Tag/TagMap.php', unindent($code));
}

function writeSchema(string $root, array $all, array $elements31, array $elements30, array $namespaces): void
{
    $entries = '';

    foreach ($all as $name => $definition) {
        $entries .= sprintf(
            "        '%s' => ['short' => '%s', 'kind' => '%s', 'codelist' => %s, 'releases' => [%s], 'class' => %s],\n",
            $name,
            $definition->short,
            $definition->kind,
            $definition->codeList === null ? 'null' : "'" . $definition->codeList . "'",
            implode(', ', array_filter([
                isset($elements30[$name]) ? "'3.0'" : null,
                isset($elements31[$name]) ? "'3.1'" : null,
            ])),
            $definition->kind === 'composite'
                ? "'" . $namespaces[$name] . '\\\\' . className($name) . "'"
                : 'null',
        );
    }

    $code = <<<PHP
    <?php

    declare(strict_types=1);

    namespace MirayS\Onix\Schema;

    final class ElementSchema
    {
        private const ELEMENTS = [
    {$entries}    ];

        public static function has(string \$element): bool
        {
            return isset(self::ELEMENTS[\$element]);
        }

        public static function get(string \$element): ?array
        {
            return self::ELEMENTS[\$element] ?? null;
        }

        public static function releases(string \$element): array
        {
            return self::ELEMENTS[\$element]['releases'] ?? [];
        }

        public static function isInRelease(string \$element, string \$release): bool
        {
            return in_array(\$release, self::ELEMENTS[\$element]['releases'] ?? [], true);
        }

        public static function codeList(string \$element): ?string
        {
            return self::ELEMENTS[\$element]['codelist'] ?? null;
        }

        public static function all(): array
        {
            return self::ELEMENTS;
        }
    }

    PHP;

    if (!is_dir($root . '/src/Schema')) {
        mkdir($root . '/src/Schema', 0o755, true);
    }

    file_put_contents($root . '/src/Schema/ElementSchema.php', unindent($code));
}

function writeClasses(string $root, array $all, array $elements31, array $elements30, array $namespaces): void
{
    foreach (['Product', 'Message'] as $directory) {
        foreach (glob($root . '/src/' . $directory . '/*.php') ?: [] as $file) {
            unlink($file);
        }

        if (!is_dir($root . '/src/' . $directory)) {
            mkdir($root . '/src/' . $directory, 0o755, true);
        }
    }

    foreach ($all as $name => $definition) {
        if ($definition->kind !== 'composite') {
            continue;
        }

        $namespace = $namespaces[$name];
        $class = className($name);
        $directory = str_ends_with($namespace, 'Message') ? 'Message' : 'Product';

        file_put_contents(
            $root . '/src/' . $directory . '/' . $class . '.php',
            renderClass($name, $definition, $all, $namespaces, $namespace, $class),
        );
    }
}

function renderClass(
    string $name,
    ElementDefinition $definition,
    array $all,
    array $namespaces,
    string $namespace,
    string $class,
): string {
    $imports = [];
    $properties = '';
    $methods = '';

    foreach ($definition->children as $child => $repeatable) {
        $childDefinition = $all[$child] ?? null;

        if ($childDefinition === null) {
            continue;
        }

        [$type, $import] = childType($childDefinition, $namespaces, $namespace);

        if ($import !== null) {
            $imports[$import] = true;
        }

        $property = $child;

        if ($repeatable) {
            $properties .= sprintf("    private array \$%s = [];\n\n", $property);
            $methods .= sprintf(
                "    public function add%s(%s \$%s): static\n    {\n        \$this->%s[] = \$%s;\n\n        return \$this;\n    }\n\n",
                $child,
                $type,
                lcfirst($child),
                $property,
                lcfirst($child),
            );
            $methods .= sprintf(
                "    public function get%s(): array\n    {\n        return \$this->%s;\n    }\n\n",
                $child,
                $property,
            );
            $methods .= sprintf(
                "    public function remove%s(%s \$%s): static\n    {\n"
                . "        \$this->%s = array_values(array_filter(\n"
                . "            \$this->%s,\n"
                . "            static fn (\$item): bool => \$item !== \$%s,\n"
                . "        ));\n\n        return \$this;\n    }\n\n",
                $child,
                $type,
                lcfirst($child),
                $property,
                $property,
                lcfirst($child),
            );

            continue;
        }

        $properties .= sprintf("    private ?%s \$%s = null;\n\n", $type, $property);
        $methods .= sprintf(
            "    public function set%s(%s \$%s): static\n    {\n        \$this->%s = \$%s;\n\n        return \$this;\n    }\n\n",
            $child,
            $type,
            lcfirst($child),
            $property,
            lcfirst($child),
        );
        $methods .= sprintf(
            "    public function get%s(): ?%s\n    {\n        return \$this->%s;\n    }\n\n",
            $child,
            $type,
            $property,
        );

        if ($childDefinition->kind === 'flag') {
            $methods .= sprintf(
                "    public function has%s(): bool\n    {\n        return \$this->%s === true;\n    }\n\n",
                $child,
                $property,
            );
        }
    }

    $traits = TRAITS[$name] ?? [];
    $useTraits = '';

    foreach ($traits as $trait) {
        $imports[$trait] = true;
        $useTraits .= sprintf("    use %s;\n\n", substr((string) strrchr($trait, '\\'), 1));
    }

    ksort($imports);
    $importLines = '';

    foreach (array_keys($imports) as $import) {
        if (!str_starts_with($import, $namespace . '\\') || substr_count(substr($import, strlen($namespace) + 1), '\\') > 0) {
            $importLines .= sprintf("use %s;\n", $import);
        }
    }

    $importLines = $importLines !== '' ? "\n" . $importLines : '';

    return sprintf(
        "<?php\n\ndeclare(strict_types=1);\n\nnamespace %s;\n%s\nclass %s\n{\n%s%s%s}\n",
        $namespace,
        $importLines,
        $class,
        $useTraits,
        $properties,
        rtrim($methods) . "\n",
    );
}

function childType(ElementDefinition $definition, array $namespaces, string $namespace): array
{
    return match ($definition->kind) {
        'codelist' => ['CodeList' . $definition->codeList, 'MirayS\\Onix\\CodeList\\CodeList' . $definition->codeList],
        'date' => ['Date', 'MirayS\\Onix\\Date'],
        'text' => ['Text', 'MirayS\\Onix\\Text'],
        'flag' => ['bool', null],
        'composite' => [
            className($definition->name),
            $namespaces[$definition->name] . '\\' . className($definition->name),
        ],
        default => [$definition->scalarType, null],
    };
}

function unindent(string $code): string
{
    return $code;
}
