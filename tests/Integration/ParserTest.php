<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Integration;

use PHPUnit\Framework\TestCase;
use MirayS\Onix\Message\Message;
use MirayS\Onix\Parser;

final class ParserTest extends TestCase
{
    private const FIXTURES = __DIR__ . '/../fixtures/';

    public function testParsesStringIntoMessage(): void
    {
        $parser = new Parser();
        $message = $parser->parseString(file_get_contents(self::FIXTURES . 'onix-3.1-reference.xml'));

        self::assertInstanceOf(Message::class, $message);
        self::assertSame('3.1', $message->getRelease());
        self::assertCount(1, $message->getProducts());
        self::assertNotNull($message->getHeader());
        self::assertSame('9780007232833', $message->getProducts()[0]->getIsbn13());
    }

    public function testParsesFileIntoMessage(): void
    {
        $parser = new Parser();
        $message = $parser->parseFile(self::FIXTURES . 'onix-3.0-reference.xml');

        self::assertSame('3.0', $message->getRelease());
        self::assertCount(1, $message->getProducts());
    }

    public function testStreamsProductsLazily(): void
    {
        $parser = new Parser();
        $products = $parser->stream(self::FIXTURES . 'onix-3.1-reference.xml');

        self::assertInstanceOf(\Generator::class, $products);
        self::assertCount(1, iterator_to_array($products, false));
    }

    public function testExposesIssues(): void
    {
        $parser = new Parser();
        $parser->parseString('<ONIXMessage release="3.1"><Product><Invented>x</Invented></Product></ONIXMessage>');

        self::assertCount(1, $parser->getIssues());
    }

    public function testRemovesProducts(): void
    {
        $parser = new Parser();
        $message = $parser->parseFile(self::FIXTURES . 'onix-3.1-reference.xml');
        $product = $message->getProducts()[0];

        $message->removeProduct($product);

        self::assertSame([], $message->getProducts());
    }
}
