<?php

declare(strict_types=1);

namespace MirayS\Onix\Reader;

use DOMDocument;
use DOMElement;
use MirayS\Onix\Exception\OnixException;

/**
 * Builds a DOM element out of ONIX expressed as nested arrays.
 *
 * ONIX 3.1 defines a JSON expression, and feeds such as openBD and JPRO have
 * shipped the same convention for years: element names are keys, repeatable
 * elements are lists, an element carrying attributes becomes an object whose
 * "content" key holds the text, and a flag element is an empty string.
 * Converting to DOM lets the ordinary hydrator do the mapping, so the array and
 * XML paths cannot drift apart.
 */
final class ArrayToDom
{
    private const string CONTENT_KEY = 'content';

    private const int MAX_DEPTH = 64;

    /**
     * @param array<string, mixed> $data
     */
    public static function element(array $data, string $name, ?DOMDocument $document = null): DOMElement
    {
        $document ??= new DOMDocument();
        $element = $document->createElement($name);

        self::fill($element, $data, $document, 0);

        return $element;
    }

    /**
     * @param array<string, mixed> $data
     */
    private static function fill(DOMElement $element, array $data, DOMDocument $document, int $depth): void
    {
        if ($depth > self::MAX_DEPTH) {
            throw new OnixException('ONIX array nests deeper than ' . self::MAX_DEPTH . ' levels');
        }

        foreach ($data as $key => $value) {
            $name = (string) $key;

            if ($name === self::CONTENT_KEY) {
                $element->appendChild($document->createTextNode(self::scalar($value)));

                continue;
            }

            if (is_array($value) && array_is_list($value)) {
                foreach ($value as $item) {
                    $element->appendChild(self::child($name, $item, $document, $depth));
                }

                continue;
            }

            if (is_array($value)) {
                $element->appendChild(self::child($name, $value, $document, $depth));

                continue;
            }

            // A scalar sibling of "content" is an XML attribute of this element;
            // anywhere else it is a leaf element holding that text.
            if (isset($data[self::CONTENT_KEY])) {
                $element->setAttribute($name, self::scalar($value));

                continue;
            }

            $element->appendChild(self::child($name, $value, $document, $depth));
        }
    }

    private static function child(string $name, mixed $value, DOMDocument $document, int $depth): DOMElement
    {
        $child = $document->createElement($name);

        if (is_array($value)) {
            self::fill($child, $value, $document, $depth + 1);

            return $child;
        }

        $text = self::scalar($value);

        if ($text !== '') {
            $child->appendChild($document->createTextNode($text));
        }

        return $child;
    }

    private static function scalar(mixed $value): string
    {
        return match (true) {
            is_string($value) => $value,
            is_bool($value)   => $value ? 'true' : 'false',
            is_int($value), is_float($value) => (string) $value,
            $value === null   => '',
            default           => throw new OnixException('ONIX array holds a value that is not a scalar: ' . get_debug_type($value)),
        };
    }
}
