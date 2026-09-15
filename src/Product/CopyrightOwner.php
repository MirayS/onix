<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class CopyrightOwner
{
    private array $CopyrightOwnerIdentifier = [];

    private ?string $PersonName = null;

    private ?string $CorporateName = null;

    public function addCopyrightOwnerIdentifier(CopyrightOwnerIdentifier $copyrightOwnerIdentifier): static
    {
        $this->CopyrightOwnerIdentifier[] = $copyrightOwnerIdentifier;

        return $this;
    }

    public function getCopyrightOwnerIdentifier(): array
    {
        return $this->CopyrightOwnerIdentifier;
    }

    public function removeCopyrightOwnerIdentifier(CopyrightOwnerIdentifier $copyrightOwnerIdentifier): static
    {
        $this->CopyrightOwnerIdentifier = array_values(array_filter(
            $this->CopyrightOwnerIdentifier,
            static fn ($item): bool => $item !== $copyrightOwnerIdentifier,
        ));

        return $this;
    }

    public function setPersonName(string $personName): static
    {
        $this->PersonName = $personName;

        return $this;
    }

    public function getPersonName(): ?string
    {
        return $this->PersonName;
    }

    public function setCorporateName(string $corporateName): static
    {
        $this->CorporateName = $corporateName;

        return $this;
    }

    public function getCorporateName(): ?string
    {
        return $this->CorporateName;
    }
}
