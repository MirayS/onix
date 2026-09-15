# PHP ONIX for Books Parser

Streaming parser for ONIX for Books **3.0 and 3.1** messages in both reference and short tag
formats. Reads multi-gigabyte feeds in constant memory, maps every element of the official
EDItEUR schema, and never aborts a whole feed because of one unexpected value.

This is a fork of [chrisribal/onix-parser](https://github.com/chrisribal/onix-parser), rewritten
around `XMLReader` with the object model and code lists generated from the official XSDs
(release 3.1 revision 3, Code Lists Issue 74).

## Requirements

PHP 8.2+ with `dom`, `libxml`, `xmlreader` and `mbstring`. `zlib` and `zip` are optional and
enable reading compressed feeds directly.

## Installation

```
composer require mirays/onix
```

## Usage

### Streaming (recommended for real feeds)

```php
$reader = new \MirayS\Onix\Reader\OnixReader();

foreach ($reader->read('feed.xml.gz') as $product) {
    echo $product->getIsbn13(), ' ', $product->getFullTitle(), PHP_EOL;
}

echo $reader->getRelease();        // "3.0" or "3.1"
echo $reader->getProductCount();
$reader->getHeader();              // MirayS\Onix\Message\Header
```

Memory stays flat regardless of file size — one `<Product>` is expanded at a time:

| Feed | Products | Peak memory | Time |
| --- | --- | --- | --- |
| 32.5 MB | 20 000 | 4 MB | 1.1 s |

`read()` accepts a path or any stream URI (`php://stdin`, `s3://…` with a registered wrapper) and
transparently unwraps `.gz`, `.bz2` and `.zip` files. `readStream()` takes an open stream
resource, `readString()` an in-memory document.

### Whole message in memory

```php
$parser = new \MirayS\Onix\Parser();
$message = $parser->parseFile('sample.xml');

$message->getRelease();
$message->getHeader();
$message->getProducts();
```

Only use this for small messages — it keeps every product in memory.

## Error handling

Real feeds contain codes from newer code list issues, elements from newer releases and outright
mistakes. By default nothing throws: the reader keeps parsing and records what it saw.

```php
$reader = new \MirayS\Onix\Reader\OnixReader();

foreach ($reader->read('feed.xml') as $product) {
    foreach ($reader->getProductIssues() as $issue) {
        echo $issue->type, ' ', $issue->path, ' ', $issue->message, PHP_EOL;
    }
}

$reader->getIssues();   // every issue seen so far, capped at 1000 by default
```

Issue types: `unknown_element`, `unknown_code`, `duplicate_element`, `invalid_value`,
`release_mismatch`, `xml_error`. Each issue carries the element path and the `RecordReference`
of the product it belongs to.

Pass `strict: true` to turn the first issue into a `MirayS\Onix\Exception\OnixException`, and
`validateRelease: true` to be told when a message declaring ONIX 3.0 uses 3.1-only elements
(or the other way round).

## Object model

Every one of the 530 elements of ONIX 3.0 and 3.1 is mapped, 148 of them as classes. Repeatable
elements get `addX()` / `getX(): array` / `removeX()`, single elements `setX()` / `getX()`.
Values are typed: code lists become `CodeListN` objects, dates `MirayS\Onix\Date`, marked-up text
`MirayS\Onix\Text`, empty flag elements (`<NoContributor/>`) become `bool` with a `hasX()` getter.

Shortcuts for the fields most people need:

```php
$product->getIsbn13();
$product->getTitle();
$product->getFullTitle();          // title, prefix and subtitle, 3.0 and 3.1 spellings
$product->getAuthorNames();
$product->getDescriptionText();    // plain text of the best available description
$product->isDeleted();

$detail = $product->getDescriptiveDetail();
$detail->getHeight();              // Measure objects by type
$detail->getPageCount();

$product->getCollateralDetail()->getCoverImageUrl();
```

### Code lists

Code lists are generated from Issue 74. Unknown codes never throw — the code is kept and
`isKnown()` returns `false`.

```php
$type = $product->getNotificationType();
$type->getCode();    // "03"
$type->getValue();   // "Notification confirmed on publication"
$type->isKnown();
$type->is('03', '04');
(string) $type;      // value, or the raw code when unknown
```

English values come from Issue 74. Spanish, German, French, Italian, Norwegian and Turkish
translations are carried over from Issue 61 and may be incomplete:

```php
$reader = new \MirayS\Onix\Reader\OnixReader(language: 'de');
```

### Dates

```php
$date = $product->getPublishingDetail()->getPublishingDate()[0]->getDate();

$date->getStart();       // DateTimeImmutable
$date->getEnd();         // end of the covered interval, or of the range
$date->getPrecision();   // year, quarter, season, month, week, day, minute, second, text
$date->isRange();
$date->isText();         // free-text dates (format 12/32) are kept verbatim
$date->format('Y-m-d');
$date->formatOnix();
```

### Marked-up text

```php
$text = $product->getCollateralDetail()->getTextContent()[0]->getText()[0];

(string) $text;      // original content
$text->toPlain();    // tags stripped, entities decoded
$text->toHtml();     // plain text wrapped into paragraphs
$text->isEmpty();
```

### Short tags and namespaces

Short tag messages (`<a001>`) and namespaced documents (default or prefixed) are handled
transparently; `MirayS\Onix\Tag\TagMap` exposes the full mapping in both directions and
`MirayS\Onix\Schema\ElementSchema` the per-element metadata (short tag, code list, releases).

## Regenerating model and code lists

The object model, the tag map and the code lists are generated from the official EDItEUR
schemas. Download the ONIX 3.0 and 3.1 reference XSDs plus `ONIX_BookProduct_CodeLists.xsd`
into one directory, then:

```
php tools/generate-model.php path/to/schemas
php tools/generate-codelists.php path/to/schemas/ONIX_BookProduct_CodeLists.xsd
```

The EDItEUR schemas are copyright material; their licence allows derived copies for strictly
internal use within your own organization. Notify EDItEUR before distributing anything
generated from them outside your organization.

## Tests

```
composer test
composer analyse
```

The test suite parses the official EDItEUR sample messages for 3.0 and 3.1 in both tag formats
and asserts they produce no issues.

## License

Mozilla Public License 2.0 — see [LICENSE](LICENSE). MPL 2.0 is file-level copyleft: you can use
this library in closed-source software, but modifications to its own files have to stay open.

This project is a fork of [chrisribal/onix-parser](https://github.com/chrisribal/onix-parser),
which is MIT licensed; portions derived from it remain available under MIT, included as
[LICENSE-MIT](LICENSE-MIT). The generated model and code lists derive from the EDItEUR ONIX
schemas — see [NOTICE](NOTICE) for the terms that apply to them.
