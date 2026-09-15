<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

use MirayS\Onix\Exception\InvalidCodeListLanguageException;

class CodeList
{
    protected string $code = '';

    protected ?string $value = null;

    private static array $instances = [];

    public static function resolve(string $code, string $language = 'en'): static
    {
        $cacheKey = static::class . '|' . $language . '|' . $code;

        if (isset(self::$instances[$cacheKey])) {
            return self::$instances[$cacheKey];
        }

        $values = static::values($language);

        $codeList = new static();
        $codeList->code = $code;
        $codeList->value = $values[$code] ?? null;

        return self::$instances[$cacheKey] = $codeList;
    }

    public static function values(string $language = 'en'): array
    {
        if (!property_exists(static::class, $language)) {
            throw new InvalidCodeListLanguageException(
                sprintf('Missing language \'%s\' in %s', $language, static::class)
            );
        }

        $values = static::${$language};

        if (!is_array($values)) {
            throw new InvalidCodeListLanguageException(
                sprintf('Missing language \'%s\' in %s', $language, static::class)
            );
        }

        return $values;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function isKnown(): bool
    {
        return $this->value !== null;
    }

    public function is(string ...$codes): bool
    {
        return in_array($this->code, $codes, true);
    }

    public function __toString(): string
    {
        return $this->value ?? $this->code;
    }
}
