# Changelog

## 2.0.0

Rewrite of the parser core. Breaking changes throughout.

### Added

- `MirayS\Onix\Reader\OnixReader`: streaming reader built on `XMLReader`, yields one `Product` at a
  time in constant memory. Reads paths, stream URIs, stream resources, in-memory strings and
  `.gz` / `.bz2` / `.zip` files.
- ONIX 3.1 support: full 3.1 element set, release detection from `@release`, optional
  `validateRelease` check, `MirayS\Onix\Schema\ElementSchema` with per-element release metadata.
- Complete object model generated from the official XSDs: 530 elements (148 classes) covering
  ONIX 3.0 and 3.1, up from 156 elements. Previously missing elements include `PersonName`,
  `CorporateName`, `Barcode`, `AudienceRange`, `EditionType`, `EditionStatement`, `ProductPart`,
  `ContentDetail`, `ContentItem`, `Prize`, `NoContributor` and `UnpricedItemType`.
- Issue reporting: unknown elements, unknown codes, repeated non-repeatable elements, invalid
  values, release mismatches and XML errors are collected per product instead of aborting the
  parse. `strict: true` restores fail-fast behaviour.
- Code lists regenerated from Issue 74 (was Issue 61), with translations carried over.
- Shortcut helpers: `getIsbn13()`, `getFullTitle()`, `getAuthorNames()`, `getDescriptionText()`,
  `getCoverImageUrl()`, `getPageCount()`, `isDeleted()`, `Contributor::getDisplayName()`.
- Flag elements (`<NoContributor/>`) map to `bool` with `hasX()` getters.
- PHPUnit test suite and PHPStan configuration; the official EDItEUR 3.0 and 3.1 samples are
  parsed in both tag formats as part of the suite.

### Fixed

- `Contributor` had no name elements at all, so contributor names were silently dropped.
- `Text::toPlain()` used an invalid regular expression and returned an empty string for every
  marked-up text, emitting a PHP warning.
- A leftover `dump()` call in the text normalizer caused a fatal error on empty `<Text/>`.
- An unknown code list value aborted the whole message; codes from newer issues are now kept.
- Repeated elements mapped to non-repeatable properties produced an all-null object without any
  error; the first occurrence is now kept and reported.
- Namespaced documents (`<onix:Product>`) silently yielded zero products.
- `Date::format()` crashed on text dates and on ranges; date parsing used the localized code list
  value, so any non-English language broke it.
- `'T' . $time ?? '00:00:00'` never applied its fallback because of operator precedence.
- Text content with `textformat="02"` was double-escaped by the CDATA wrapping in the encoder.

### Changed

- Renamed to `mirays/onix`; the namespace is now `MirayS\Onix` (was `Ribal\Onix`).
- Relicensed from MIT to MPL 2.0. Portions derived from the original MIT work remain available
  under MIT (`LICENSE-MIT`); see `NOTICE` for third-party terms, including the EDItEUR schemas the
  model and code lists are generated from.
- Requires PHP 8.2+; `symfony/serializer`, `symfony/property-info` and `symfony/property-access`
  are no longer used, so the library works with any Symfony version (or none).
- `Parser::parseString()` and `parseFile()` still return a `Message`, but are now thin wrappers
  around the streaming reader. `Parser::stream()` is the streaming entry point.
- Getters return typed values and `null` instead of unset properties; setters and adders are
  fluent.
- `MirayS\Onix\Normalizer\*` and `MirayS\Onix\ONIXEncoder` are removed. The short tag table moved to
  `MirayS\Onix\Tag\TagMap` and now covers the whole schema (530 entries, was 426).
