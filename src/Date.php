<?php

declare(strict_types=1);

namespace MirayS\Onix;

use DateTimeImmutable;
use MirayS\Onix\CodeList\CodeList55;
use MirayS\Onix\Exception\InvalidDateException;

final class Date
{
    public const PRECISION_YEAR = 'year';
    public const PRECISION_SEASON = 'season';
    public const PRECISION_QUARTER = 'quarter';
    public const PRECISION_MONTH = 'month';
    public const PRECISION_WEEK = 'week';
    public const PRECISION_DAY = 'day';
    public const PRECISION_MINUTE = 'minute';
    public const PRECISION_SECOND = 'second';
    public const PRECISION_TEXT = 'text';

    private const TOKENS = [
        'YYYY' => '(?P<year>\d{4})',
        'MM' => '(?P<month>\d{2})',
        'DD' => '(?P<day>\d{2})',
        'WW' => '(?P<week>\d{2})',
        'Q' => '(?P<quarter>\d)',
        'S' => '(?P<season>\d)',
        'hh' => '(?P<hour>\d{2})',
        'mm' => '(?P<minute>\d{2})',
        'ss' => '(?P<second>\d{2})',
    ];

    private CodeList55 $formatCode;

    private bool $hijri = false;

    private ?string $text = null;

    private ?DateTimeImmutable $start = null;

    private ?DateTimeImmutable $end = null;

    private string $precision = self::PRECISION_TEXT;

    private bool $range = false;

    public static function parse(string $input, ?string $formatCode = null): self
    {
        $date = new self();
        $date->formatCode = CodeList55::resolve($formatCode ?? '00');
        $date->parseInput(trim($input), $formatCode === null);

        return $date;
    }

    private function parseInput(string $input, bool $guess = false): void
    {
        $format = $guess
            ? $this->guessFormat($input)
            : CodeList55::values('en')[$this->formatCode->getCode()] ?? $this->guessFormat($input);

        if (str_contains($format, '(H)')) {
            $this->hijri = true;
            $format = trim(str_replace('(H)', '', $format));
        }

        if (stripos($format, 'text') !== false || $input === '') {
            $this->text = $input;
            $this->precision = self::PRECISION_TEXT;

            return;
        }

        $length = strlen($format);
        $half = intdiv($length, 2);

        if (
            $length % 2 === 0
            && $half >= 4
            && str_starts_with(substr($format, $half), 'YYYY')
            && substr($format, 0, $half) === substr($format, $half)
        ) {
            $this->range = true;
            $single = substr($format, 0, $half);
            [$start] = $this->parsePart($input, $single, 0);
            [, $end] = $this->parsePart($input, $single, $half);
            $this->start = $start;
            $this->end = $end;

            return;
        }

        try {
            [$this->start, $this->end] = $this->parsePart($input, $format, 0);
        } catch (InvalidDateException $exception) {
            $fallback = $this->guessFormat($input);

            if ($fallback === $format || stripos($fallback, 'text') !== false) {
                $this->text = $input;
                $this->precision = self::PRECISION_TEXT;

                return;
            }

            [$this->start, $this->end] = $this->parsePart($input, $fallback, 0);
        }
    }

    private function guessFormat(string $input): string
    {
        return match (strlen($input)) {
            4 => 'YYYY',
            5 => 'YYYYQ',
            6 => 'YYYYMM',
            8 => 'YYYYMMDD',
            default => 'Text string',
        };
    }

    private function parsePart(string $input, string $format, int $offset): array
    {
        $pattern = $format;

        foreach (self::TOKENS as $token => $group) {
            $pattern = str_replace($token, $group, $pattern);
        }

        $pattern = '/^' . str_replace('T', 'T?', $pattern) . '/';
        $slice = substr($input, $offset);

        if (!preg_match($pattern, $slice, $matches)) {
            throw new InvalidDateException(
                sprintf('Cannot parse date %s with format %s', var_export($input, true), $format)
            );
        }

        $year = (int) $matches['year'];

        if (isset($matches['week']) && $matches['week'] !== '') {
            $this->precision = self::PRECISION_WEEK;
            $start = (new DateTimeImmutable('midnight'))->setISODate($year, (int) $matches['week'], 1);

            return [$start, $start->modify('+6 days')];
        }

        if (isset($matches['quarter']) && $matches['quarter'] !== '') {
            $this->precision = self::PRECISION_QUARTER;
            $quarter = max(1, min(4, (int) $matches['quarter']));
            $start = (new DateTimeImmutable('midnight'))->setDate($year, ($quarter - 1) * 3 + 1, 1);

            return [$start, $start->modify('+3 months -1 day')];
        }

        if (isset($matches['season']) && $matches['season'] !== '') {
            $this->precision = self::PRECISION_SEASON;

            return $this->season($year, (int) $matches['season']);
        }

        $month = isset($matches['month']) && $matches['month'] !== '' ? (int) $matches['month'] : null;
        $day = isset($matches['day']) && $matches['day'] !== '' ? (int) $matches['day'] : null;
        $hour = isset($matches['hour']) && $matches['hour'] !== '' ? (int) $matches['hour'] : null;
        $minute = isset($matches['minute']) && $matches['minute'] !== '' ? (int) $matches['minute'] : null;
        $second = isset($matches['second']) && $matches['second'] !== '' ? (int) $matches['second'] : null;

        $start = (new DateTimeImmutable('midnight'))
            ->setDate($year, $month ?? 1, $day ?? 1)
            ->setTime($hour ?? 0, $minute ?? 0, $second ?? 0);

        if ($second !== null) {
            $this->precision = self::PRECISION_SECOND;

            return [$start, $start];
        }

        if ($minute !== null) {
            $this->precision = self::PRECISION_MINUTE;

            return [$start, $start->modify('+59 seconds')];
        }

        if ($day !== null) {
            $this->precision = self::PRECISION_DAY;

            return [$start, $start->modify('+1 day -1 second')];
        }

        if ($month !== null) {
            $this->precision = self::PRECISION_MONTH;

            return [$start, $start->modify('+1 month -1 second')];
        }

        $this->precision = self::PRECISION_YEAR;

        return [$start, $start->modify('+1 year -1 second')];
    }

    private function season(int $year, int $season): array
    {
        $ranges = [
            1 => ['-03-20', '-06-20'],
            2 => ['-06-20', '-09-22'],
            3 => ['-09-22', '-12-21'],
            4 => ['-12-21', '+1'],
        ];

        $range = $ranges[$season] ?? $ranges[1];
        $start = new DateTimeImmutable($year . $range[0] . ' 00:00:00');
        $end = $range[1] === '+1'
            ? new DateTimeImmutable(($year + 1) . '-03-20 00:00:00')
            : new DateTimeImmutable($year . $range[1] . ' 00:00:00');

        return [$start, $end->modify('-1 second')];
    }

    public function getFormatCode(): CodeList55
    {
        return $this->formatCode;
    }

    public function isHijri(): bool
    {
        return $this->hijri;
    }

    public function isText(): bool
    {
        return $this->text !== null;
    }

    public function isRange(): bool
    {
        return $this->range;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getPrecision(): string
    {
        return $this->precision;
    }

    public function getStart(): ?DateTimeImmutable
    {
        return $this->start;
    }

    public function getEnd(): ?DateTimeImmutable
    {
        return $this->end;
    }

    public function getDates(): array
    {
        if ($this->start === null) {
            return [];
        }

        return $this->range ? [$this->start, $this->end] : [$this->start];
    }

    public function format(string $dateFormat = 'Y-m-d'): string
    {
        if ($this->text !== null) {
            return $this->text;
        }

        if ($this->start === null) {
            return '';
        }

        if ($this->range && $this->end !== null) {
            return $this->start->format($dateFormat) . ' – ' . $this->end->format($dateFormat);
        }

        return $this->start->format($dateFormat);
    }

    public function formatOnix(): string
    {
        if ($this->text !== null) {
            return $this->text;
        }

        if ($this->start === null) {
            return '';
        }

        $formats = [
            self::PRECISION_YEAR => 'Y',
            self::PRECISION_MONTH => 'Ym',
            self::PRECISION_DAY => 'Ymd',
            self::PRECISION_MINUTE => 'Ymd\THi',
            self::PRECISION_SECOND => 'Ymd\THis',
        ];

        $format = $formats[$this->precision] ?? 'Ymd';
        $output = $this->start->format($format);

        if ($this->range && $this->end !== null) {
            $output .= $this->end->format($format);
        }

        return $output;
    }

    public function __toString(): string
    {
        return $this->format();
    }
}
