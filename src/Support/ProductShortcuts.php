<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

use MirayS\Onix\Product\ProductIdentifier;

trait ProductShortcuts
{
    public function getIdentifierOfType(string ...$types): ?ProductIdentifier
    {
        foreach ($this->getProductIdentifier() as $identifier) {
            $type = $identifier->getProductIDType();

            if ($type !== null && $type->is(...$types)) {
                return $identifier;
            }
        }

        return null;
    }

    public function getIsbn13(): ?string
    {
        return $this->getIdentifierOfType('15', '03')?->getIDValue();
    }

    public function getIsbn10(): ?string
    {
        return $this->getIdentifierOfType('02')?->getIDValue();
    }

    public function getTitle(): ?string
    {
        return $this->getDescriptiveDetail()?->getTitle();
    }

    public function getFullTitle(): ?string
    {
        return $this->getDescriptiveDetail()?->getFullTitle();
    }

    public function getContributors(): array
    {
        return $this->getDescriptiveDetail()?->getContributor() ?? [];
    }

    public function getAuthorNames(): array
    {
        $names = [];

        foreach ($this->getContributors() as $contributor) {
            if ($contributor->isAuthor() && ($name = $contributor->getDisplayName()) !== null) {
                $names[] = $name;
            }
        }

        return $names;
    }

    public function getDescriptionText(): ?string
    {
        return $this->getCollateralDetail()?->getDescriptionText();
    }

    public function isDeleted(): bool
    {
        return $this->getNotificationType()?->is('05') === true;
    }
}
