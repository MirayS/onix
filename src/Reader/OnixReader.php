<?php

declare(strict_types=1);

namespace MirayS\Onix\Reader;

use DOMDocument;
use DOMElement;
use Generator;
use MirayS\Onix\Exception\OnixException;
use MirayS\Onix\Hydration\Hydrator;
use MirayS\Onix\Hydration\Issue;
use MirayS\Onix\Hydration\IssueCollector;
use MirayS\Onix\Message\Header;
use MirayS\Onix\Product\Product;
use XMLReader;

final class OnixReader
{
    public const RELEASE_30 = '3.0';
    public const RELEASE_31 = '3.1';

    private const LIBXML_FLAGS = LIBXML_NONET | LIBXML_COMPACT | LIBXML_PARSEHUGE | LIBXML_NOERROR | LIBXML_NOWARNING;

    private IssueCollector $issues;

    private Hydrator $hydrator;

    private ?Header $header = null;

    private ?string $release = null;

    private array $productIssues = [];

    private ?string $productRawXml = null;

    private int $productCount = 0;

    public function __construct(
        private readonly string $language = 'en',
        private readonly bool $strict = false,
        int $issueLimit = 1000,
        bool $validateRelease = false,
        private readonly bool $captureRawXml = false,
    ) {
        $this->issues = new IssueCollector($strict, $issueLimit);
        $this->hydrator = new Hydrator($language, $this->issues);
        $this->hydrator->setValidateRelease($validateRelease);
    }

    public function read(string $source): Generator
    {
        $uri = $this->resolveUri($source);
        $reader = new XMLReader();

        $previous = libxml_use_internal_errors(true);

        if (@$reader->open($uri, null, self::LIBXML_FLAGS) === false) {
            libxml_use_internal_errors($previous);

            throw new OnixException(sprintf('Cannot open ONIX source %s', $source));
        }

        try {
            yield from $this->iterate($reader);
        } finally {
            $reader->close();
            $this->collectXmlErrors();
            libxml_use_internal_errors($previous);
        }
    }

    public function readString(string $xml): Generator
    {
        $reader = new XMLReader();
        $previous = libxml_use_internal_errors(true);

        if (@$reader->XML($xml, null, self::LIBXML_FLAGS) === false) {
            libxml_use_internal_errors($previous);

            throw new OnixException('Cannot parse ONIX string');
        }

        try {
            yield from $this->iterate($reader);
        } finally {
            $reader->close();
            $this->collectXmlErrors();
            libxml_use_internal_errors($previous);
        }
    }

    /**
     * @param resource $stream
     */
    public function readStream($stream): Generator
    {
        if (!is_resource($stream)) {
            throw new OnixException('readStream() expects a stream resource');
        }

        $uri = StreamRegistry::register($stream);

        try {
            yield from $this->read($uri);
        } finally {
            StreamRegistry::release($uri);
        }
    }

    private function resolveUri(string $source): string
    {
        if (preg_match('#^[a-z0-9.+-]+://#i', $source) === 1) {
            return $source;
        }

        if (!is_file($source) || !is_readable($source)) {
            throw new OnixException(sprintf('ONIX file %s is not readable', $source));
        }

        $extension = strtolower(pathinfo($source, PATHINFO_EXTENSION));

        return match ($extension) {
            'gz', 'gzip' => 'compress.zlib://' . $source,
            'bz2' => 'compress.bzip2://' . $source,
            'zip' => 'zip://' . $source . '#' . $this->firstZipEntry($source),
            default => $source,
        };
    }

    private function firstZipEntry(string $source): string
    {
        if (!class_exists(\ZipArchive::class)) {
            throw new OnixException('ext-zip is required to read zipped ONIX files');
        }

        $zip = new \ZipArchive();

        if ($zip->open($source) !== true) {
            throw new OnixException(sprintf('Cannot open zip archive %s', $source));
        }

        for ($i = 0; $i < $zip->numFiles; $i++) {
            $name = (string) $zip->getNameIndex($i);

            if (str_ends_with(strtolower($name), '.xml')) {
                $zip->close();

                return $name;
            }
        }

        $zip->close();

        throw new OnixException(sprintf('No XML entry found in %s', $source));
    }

    private function iterate(XMLReader $reader): Generator
    {
        $document = new DOMDocument();
        $continue = $reader->read();

        while ($continue) {
            if ($reader->nodeType !== XMLReader::ELEMENT) {
                $continue = $reader->read();

                continue;
            }

            $name = strtolower($reader->localName);

            if ($name === 'onixmessage' || $name === 'onixmessagelist') {
                $release = $reader->getAttribute('release');
                $this->release = $release !== null && $release !== '' ? $release : null;
                $this->hydrator->setRelease($this->release);
                $continue = $reader->read();

                continue;
            }

            if ($name === 'header') {
                $node = $reader->expand($document);
                $this->header = $node instanceof DOMElement
                    ? $this->hydrator->hydrate($node, Header::class, 'Header')
                    : null;
                $continue = $reader->next();

                continue;
            }

            if ($name === 'product') {
                $node = $reader->expand($document);

                if ($node instanceof DOMElement) {
                    yield $this->hydrateProduct($node);
                }

                $continue = $reader->next();

                continue;
            }

            $continue = $reader->read();
        }
    }

    private function hydrateProduct(DOMElement $node): Product
    {
        $this->productRawXml = $this->captureRawXml
            ? $node->ownerDocument?->saveXML($node) ?: null
            : null;

        $offset = $this->issues->count();
        $this->issues->setRecordReference($this->recordReference($node));

        $product = $this->hydrator->hydrate($node, Product::class, 'Product');

        $this->issues->setRecordReference(null);
        $this->productIssues = array_slice($this->issues->all(), $offset);
        $this->productCount++;

        return $product;
    }

    private function recordReference(DOMElement $node): ?string
    {
        foreach ($node->childNodes as $child) {
            if (!$child instanceof DOMElement) {
                continue;
            }

            $name = strtolower($child->localName);

            if ($name === 'recordreference' || $name === 'a001') {
                return trim($child->textContent);
            }
        }

        return null;
    }

    private function collectXmlErrors(): void
    {
        foreach (libxml_get_errors() as $error) {
            $this->issues->add(
                Issue::XML_ERROR,
                sprintf('line %d', $error->line),
                trim($error->message),
            );
        }

        libxml_clear_errors();
    }

    public function getHeader(): ?Header
    {
        return $this->header;
    }

    public function getRelease(): ?string
    {
        return $this->release;
    }

    public function isRelease31(): bool
    {
        return $this->release !== null && version_compare($this->release, '3.1', '>=');
    }

    public function getProductCount(): int
    {
        return $this->productCount;
    }

    public function getIssues(): array
    {
        return $this->issues->all();
    }

    public function getProductIssues(): array
    {
        return $this->productIssues;
    }

    /**
     * Serialized XML of the product yielded last, when the reader was built with
     * $captureRawXml. Valid until the next product is pulled from the generator.
     */
    public function getProductRawXml(): ?string
    {
        return $this->productRawXml;
    }
}
