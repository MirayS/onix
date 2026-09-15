<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class EventSponsor
{
    private array $EventSponsorIdentifier = [];

    private ?string $PersonName = null;

    private ?string $CorporateName = null;

    public function addEventSponsorIdentifier(EventSponsorIdentifier $eventSponsorIdentifier): static
    {
        $this->EventSponsorIdentifier[] = $eventSponsorIdentifier;

        return $this;
    }

    public function getEventSponsorIdentifier(): array
    {
        return $this->EventSponsorIdentifier;
    }

    public function removeEventSponsorIdentifier(EventSponsorIdentifier $eventSponsorIdentifier): static
    {
        $this->EventSponsorIdentifier = array_values(array_filter(
            $this->EventSponsorIdentifier,
            static fn ($item): bool => $item !== $eventSponsorIdentifier,
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
