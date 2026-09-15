<?php

declare(strict_types=1);

namespace MirayS\Onix\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use MirayS\Onix\Date;

final class DateTest extends TestCase
{
    public static function dates(): array
    {
        return [
            'day' => ['20200115', '00', '2020-01-15', '2020-01-15', Date::PRECISION_DAY, false],
            'month' => ['202001', '01', '2020-01-01', '2020-01-31', Date::PRECISION_MONTH, false],
            'year' => ['2020', '05', '2020-01-01', '2020-12-31', Date::PRECISION_YEAR, false],
            'week' => ['202002', '02', '2020-01-06', '2020-01-12', Date::PRECISION_WEEK, false],
            'quarter' => ['20202', '03', '2020-04-01', '2020-06-30', Date::PRECISION_QUARTER, false],
            'season' => ['20201', '04', '2020-03-20', '2020-06-19', Date::PRECISION_SEASON, false],
            'day range' => ['2020011520200315', '06', '2020-01-15', '2020-03-15', Date::PRECISION_DAY, true],
            'month range' => ['202001202003', '07', '2020-01-01', '2020-03-31', Date::PRECISION_MONTH, true],
            'year range' => ['20202021', '11', '2020-01-01', '2021-12-31', Date::PRECISION_YEAR, true],
            'minute' => ['20200115T1030', '13', '2020-01-15', '2020-01-15', Date::PRECISION_MINUTE, false],
            'second' => ['20200115T103055', '14', '2020-01-15', '2020-01-15', Date::PRECISION_SECOND, false],
        ];
    }

    #[DataProvider('dates')]
    public function testParsesOnixFormats(
        string $input,
        string $format,
        string $start,
        string $end,
        string $precision,
        bool $range,
    ): void {
        $date = Date::parse($input, $format);

        self::assertSame($start, $date->getStart()?->format('Y-m-d'));
        self::assertSame($end, $date->getEnd()?->format('Y-m-d'));
        self::assertSame($precision, $date->getPrecision());
        self::assertSame($range, $date->isRange());
        self::assertFalse($date->isText());
    }

    public function testParsesTimeOfDay(): void
    {
        $date = Date::parse('20200115T1030', '13');

        self::assertSame('2020-01-15 10:30:00', $date->getStart()?->format('Y-m-d H:i:s'));
    }

    public function testKeepsTextDates(): void
    {
        $date = Date::parse('Spring 2021', '12');

        self::assertTrue($date->isText());
        self::assertSame('Spring 2021', $date->getText());
        self::assertSame('Spring 2021', $date->format('Y-m-d'));
        self::assertSame('Spring 2021', (string) $date);
        self::assertSame([], $date->getDates());
    }

    public function testMarksHijriDates(): void
    {
        $date = Date::parse('14410115', '20');

        self::assertTrue($date->isHijri());
    }

    public function testDoesNotDependOnCodeListLanguage(): void
    {
        $english = Date::parse('20200115', '00');
        $german = Date::parse('20200115', '00');

        self::assertSame($english->format(), $german->format());
        self::assertSame('2020-01-15', $german->format());
    }

    public function testGuessesFormatForUnknownFormatCode(): void
    {
        $date = Date::parse('20200115', '99');

        self::assertSame('2020-01-15', $date->format());
    }

    public function testRoundTripsToOnixFormat(): void
    {
        self::assertSame('20200115', Date::parse('20200115', '00')->formatOnix());
        self::assertSame('202001', Date::parse('202001', '01')->formatOnix());
        self::assertSame('2020011520200315', Date::parse('2020011520200315', '06')->formatOnix());
    }
}
