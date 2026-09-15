<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

final class Value
{
    public static function first(mixed $value): mixed
    {
        if (is_array($value)) {
            return $value[0] ?? null;
        }

        return $value;
    }

    public static function firstString(mixed $value): ?string
    {
        $value = self::first($value);

        if ($value === null) {
            return null;
        }

        $value = is_string($value) ? $value : (string) $value;

        return $value !== '' ? $value : null;
    }
}
