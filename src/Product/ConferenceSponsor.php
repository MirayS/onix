<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ConferenceSponsor
{
    private array $ConferenceSponsorIdentifier = [];

    private ?string $PersonName = null;

    private ?string $CorporateName = null;

    public function addConferenceSponsorIdentifier(ConferenceSponsorIdentifier $conferenceSponsorIdentifier): static
    {
        $this->ConferenceSponsorIdentifier[] = $conferenceSponsorIdentifier;

        return $this;
    }

    public function getConferenceSponsorIdentifier(): array
    {
        return $this->ConferenceSponsorIdentifier;
    }

    public function removeConferenceSponsorIdentifier(ConferenceSponsorIdentifier $conferenceSponsorIdentifier): static
    {
        $this->ConferenceSponsorIdentifier = array_values(array_filter(
            $this->ConferenceSponsorIdentifier,
            static fn ($item): bool => $item !== $conferenceSponsorIdentifier,
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
