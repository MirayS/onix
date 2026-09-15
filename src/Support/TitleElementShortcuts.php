<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

trait TitleElementShortcuts
{
    public function getFullTitle(): ?string
    {
        $withoutPrefix = $this->firstString($this->getTitleWithoutPrefix());

        if ($withoutPrefix !== null) {
            $prefix = $this->firstString($this->getTitlePrefix());

            return $prefix !== null ? $prefix . ' ' . $withoutPrefix : $withoutPrefix;
        }

        return $this->firstString($this->getTitleText());
    }

    public function getSubtitleText(): ?string
    {
        return $this->firstString($this->getSubtitle());
    }

    private function firstString(mixed $value): ?string
    {
        return Value::firstString($value);
    }
}
