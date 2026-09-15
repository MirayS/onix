<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$root = dirname(__DIR__);
$file = $argv[1] ?? null;

if ($file === null || !is_file($file)) {
    fwrite(STDERR, "usage: php tools/generate-codelists.php <ONIX_BookProduct_CodeLists.xsd>\n");

    exit(1);
}

const LANGUAGES = ['es', 'de', 'fr', 'it', 'nb', 'tr'];

$translations = collectTranslations($root);

$document = new DOMDocument();
$document->load($file, LIBXML_NONET | LIBXML_PARSEHUGE);

$xpath = new DOMXPath($document);
$xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

$written = 0;
$generated = [];

foreach ($xpath->query('/xs:schema/xs:simpleType[starts-with(@name, "List")]') as $type) {
    if (!$type instanceof DOMElement) {
        continue;
    }

    $name = $type->getAttribute('name');

    if (preg_match('/^List(\d+)$/', $name, $matches) !== 1) {
        continue;
    }

    $number = $matches[1];
    $description = '';

    foreach ($xpath->query('./xs:annotation/xs:documentation', $type) as $documentation) {
        $description = trim($documentation->textContent);

        break;
    }

    $values = [];

    foreach ($xpath->query('./xs:restriction/xs:enumeration', $type) as $enumeration) {
        if (!$enumeration instanceof DOMElement) {
            continue;
        }

        $code = $enumeration->getAttribute('value');
        $label = null;

        foreach ($xpath->query('./xs:annotation/xs:documentation', $enumeration) as $documentation) {
            $label = trim($documentation->textContent);

            break;
        }

        $values[$code] = $label ?? $code;
    }

    if ($values === []) {
        continue;
    }

    file_put_contents(
        $root . '/src/CodeList/CodeList' . $number . '.php',
        renderCodeList($number, $description, $values, $translations['CodeList' . $number] ?? []),
    );

    $generated['CodeList' . $number] = true;
    $written++;
}

foreach (glob($root . '/src/CodeList/CodeList*.php') ?: [] as $path) {
    $class = basename($path, '.php');

    if ($class !== 'CodeList' && $class !== 'CodeListInterface' && !isset($generated[$class])) {
        unlink($path);
    }
}

echo sprintf("generated %d code lists\n", $written);

function collectTranslations(string $root): array
{
    $translations = [];

    foreach (glob($root . '/src/CodeList/CodeList*.php') ?: [] as $path) {
        $class = basename($path, '.php');

        if ($class === 'CodeList' || $class === 'CodeListInterface') {
            continue;
        }

        $fqcn = 'MirayS\\Onix\\CodeList\\' . $class;

        if (!class_exists($fqcn)) {
            continue;
        }

        $reflection = new ReflectionClass($fqcn);

        foreach (LANGUAGES as $language) {
            if (!$reflection->hasProperty($language)) {
                continue;
            }

            $property = $reflection->getProperty($language);
            $value = $property->getValue();

            if (is_array($value) && $value !== []) {
                $translations[$class][$language] = $value;
            }
        }
    }

    return $translations;
}

function renderCodeList(string $number, string $description, array $values, array $translations): string
{
    $body = renderArray('en', $values);

    foreach (LANGUAGES as $language) {
        if (isset($translations[$language])) {
            $body .= renderArray($language, $translations[$language]);
        }
    }

    return sprintf(
        "<?php\n\ndeclare(strict_types=1);\n\nnamespace MirayS\\Onix\\CodeList;\n\n"
        . "/**\n * ONIX Code List %s%s\n *\n * @see https://ns.editeur.org/onix/en/%s\n */\n"
        . "class CodeList%s extends CodeList implements CodeListInterface\n{\n%s}\n",
        $number,
        $description !== '' ? ' — ' . $description : '',
        $number,
        $number,
        $body,
    );
}

function renderArray(string $language, array $values): string
{
    $entries = '';

    foreach ($values as $code => $label) {
        $entries .= sprintf(
            "        '%s' => '%s',\n",
            str_replace("'", "\\'", (string) $code),
            str_replace(["\\", "'"], ["\\\\", "\\'"], (string) $label),
        );
    }

    return sprintf("    protected static array \$%s = [\n%s    ];\n\n", $language, $entries);
}
