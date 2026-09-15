<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Unit;

use PHPUnit\Framework\TestCase;
use MirayS\Onix\CodeList\CodeList5;
use MirayS\Onix\Exception\InvalidCodeListLanguageException;

final class CodeListTest extends TestCase
{
    public function testResolvesKnownCode(): void
    {
        $code = CodeList5::resolve('15');

        self::assertSame('15', $code->getCode());
        self::assertSame('ISBN-13', $code->getValue());
        self::assertTrue($code->isKnown());
        self::assertSame('ISBN-13', (string) $code);
    }

    public function testKeepsUnknownCodeWithoutThrowing(): void
    {
        $code = CodeList5::resolve('99');

        self::assertSame('99', $code->getCode());
        self::assertNull($code->getValue());
        self::assertFalse($code->isKnown());
        self::assertSame('99', (string) $code);
    }

    public function testResolvesTranslatedValue(): void
    {
        self::assertSame('Propio / Privado', CodeList5::resolve('01', 'es')->getValue());
    }

    public function testRejectsUnknownLanguage(): void
    {
        $this->expectException(InvalidCodeListLanguageException::class);

        CodeList5::resolve('15', 'xx');
    }

    public function testComparesCodes(): void
    {
        self::assertTrue(CodeList5::resolve('15')->is('03', '15'));
        self::assertFalse(CodeList5::resolve('15')->is('03'));
    }

    public function testSharesInstances(): void
    {
        self::assertSame(CodeList5::resolve('15'), CodeList5::resolve('15'));
    }
}
