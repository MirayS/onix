<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

trait ContributorShortcuts
{
    public function getDisplayName(): ?string
    {
        $name = $this->firstValue($this->getPersonName())
            ?? $this->firstValue($this->getCorporateName())
            ?? $this->firstValue($this->getCorporateNameInverted())
            ?? $this->firstValue($this->getPersonNameInverted());

        if ($name !== null) {
            return $name;
        }

        $parts = array_filter([
            $this->firstValue($this->getTitlesBeforeNames()),
            $this->firstValue($this->getNamesBeforeKey()),
            $this->firstValue($this->getPrefixToKey()),
            $this->firstValue($this->getKeyNames()),
            $this->firstValue($this->getNamesAfterKey()),
            $this->firstValue($this->getSuffixToKey()),
        ]);

        return $parts === [] ? null : implode(' ', $parts);
    }

    public function isAuthor(): bool
    {
        return $this->hasRole('A01');
    }

    public function hasRole(string ...$codes): bool
    {
        foreach ($this->getContributorRole() as $role) {
            if ($role->is(...$codes)) {
                return true;
            }
        }

        return false;
    }

    public function getRoleCodes(): array
    {
        return array_map(
            static fn ($role): string => $role->getCode(),
            $this->getContributorRole(),
        );
    }

    private function firstValue(mixed $value): ?string
    {
        return Value::firstString($value);
    }
}
