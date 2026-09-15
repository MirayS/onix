<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Unit;

use PHPUnit\Framework\TestCase;
use MirayS\Onix\Text;

final class TextTest extends TestCase
{
    public function testConvertsHtmlToPlainText(): void
    {
        $text = new Text('<p>Hello<br/>World</p><p>Second</p>', Text::TYPE_HTML);

        self::assertSame("Hello\nWorld\n\nSecond", $text->toPlain());
    }

    public function testDecodesEntitiesInPlainText(): void
    {
        $text = new Text('caf&eacute; &amp; bar', Text::TYPE_HTML);

        self::assertSame('café & bar', $text->toPlain());
    }

    public function testKeepsPlainTextUntouched(): void
    {
        $text = new Text("Line 1\nLine 2", Text::TYPE_DEFAULT);

        self::assertSame("Line 1\nLine 2", $text->toPlain());
    }

    public function testConvertsPlainTextToHtml(): void
    {
        $text = new Text("First\n\nSecond\nthird", Text::TYPE_DEFAULT);

        self::assertSame('<p>First</p><p>Second<br>third</p>', $text->toHtml());
    }

    public function testKeepsMarkupWhenConvertingToHtml(): void
    {
        $text = new Text('<p>Hi</p>', Text::TYPE_XHTML);

        self::assertSame('<p>Hi</p>', $text->toHtml());
    }

    public function testAcceptsUnknownTextFormat(): void
    {
        $text = new Text('plain', '99');

        self::assertSame('plain', $text->toPlain());
        self::assertFalse($text->isMarkup());
    }

    public function testDetectsEmptyContent(): void
    {
        self::assertTrue((new Text('', Text::TYPE_DEFAULT))->isEmpty());
        self::assertTrue((new Text('<p> </p>', Text::TYPE_HTML))->isEmpty());
        self::assertFalse((new Text('x', Text::TYPE_DEFAULT))->isEmpty());
    }
}
