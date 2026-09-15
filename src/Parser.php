<?php

declare(strict_types=1);

namespace MirayS\Onix;

use Generator;
use MirayS\Onix\Message\Message;
use MirayS\Onix\Product\Product;
use MirayS\Onix\Reader\OnixReader;

class Parser
{
    private OnixReader $reader;

    public function __construct(
        private readonly string $language = 'en',
        private readonly bool $strict = false,
        private readonly bool $validateRelease = false,
    ) {
        $this->reader = $this->createReader();
    }

    public function stream(string $source): Generator
    {
        $this->reader = $this->createReader();

        return $this->reader->read($source);
    }

    /**
     * @param resource $stream
     */
    public function streamResource($stream): Generator
    {
        $this->reader = $this->createReader();

        return $this->reader->readStream($stream);
    }

    public function streamString(string $xml): Generator
    {
        $this->reader = $this->createReader();

        return $this->reader->readString($xml);
    }

    public function parseString(string $xml): Message
    {
        return $this->collect($this->streamString($xml));
    }

    public function parseFile(string $source): Message
    {
        return $this->collect($this->stream($source));
    }

    private function collect(Generator $products): Message
    {
        $message = new Message();

        foreach ($products as $product) {
            if ($product instanceof Product) {
                $message->addProduct($product);
            }
        }

        $header = $this->reader->getHeader();

        if ($header !== null) {
            $message->setHeader($header);
        }

        $message->setRelease($this->reader->getRelease());

        return $message;
    }

    public function getReader(): OnixReader
    {
        return $this->reader;
    }

    public function getIssues(): array
    {
        return $this->reader->getIssues();
    }

    private function createReader(): OnixReader
    {
        return new OnixReader($this->language, $this->strict, validateRelease: $this->validateRelease);
    }
}
