<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList20;
use MirayS\Onix\Date;

class Event
{
    private ?CodeList20 $EventRole = null;

    private array $EventName = [];

    private array $EventAcronym = [];

    private ?int $EventNumber = null;

    private array $EventTheme = [];

    private ?Date $EventDate = null;

    private array $EventPlace = [];

    private array $EventSponsor = [];

    private array $Website = [];

    public function setEventRole(CodeList20 $eventRole): static
    {
        $this->EventRole = $eventRole;

        return $this;
    }

    public function getEventRole(): ?CodeList20
    {
        return $this->EventRole;
    }

    public function addEventName(string $eventName): static
    {
        $this->EventName[] = $eventName;

        return $this;
    }

    public function getEventName(): array
    {
        return $this->EventName;
    }

    public function removeEventName(string $eventName): static
    {
        $this->EventName = array_values(array_filter(
            $this->EventName,
            static fn ($item): bool => $item !== $eventName,
        ));

        return $this;
    }

    public function addEventAcronym(string $eventAcronym): static
    {
        $this->EventAcronym[] = $eventAcronym;

        return $this;
    }

    public function getEventAcronym(): array
    {
        return $this->EventAcronym;
    }

    public function removeEventAcronym(string $eventAcronym): static
    {
        $this->EventAcronym = array_values(array_filter(
            $this->EventAcronym,
            static fn ($item): bool => $item !== $eventAcronym,
        ));

        return $this;
    }

    public function setEventNumber(int $eventNumber): static
    {
        $this->EventNumber = $eventNumber;

        return $this;
    }

    public function getEventNumber(): ?int
    {
        return $this->EventNumber;
    }

    public function addEventTheme(string $eventTheme): static
    {
        $this->EventTheme[] = $eventTheme;

        return $this;
    }

    public function getEventTheme(): array
    {
        return $this->EventTheme;
    }

    public function removeEventTheme(string $eventTheme): static
    {
        $this->EventTheme = array_values(array_filter(
            $this->EventTheme,
            static fn ($item): bool => $item !== $eventTheme,
        ));

        return $this;
    }

    public function setEventDate(Date $eventDate): static
    {
        $this->EventDate = $eventDate;

        return $this;
    }

    public function getEventDate(): ?Date
    {
        return $this->EventDate;
    }

    public function addEventPlace(string $eventPlace): static
    {
        $this->EventPlace[] = $eventPlace;

        return $this;
    }

    public function getEventPlace(): array
    {
        return $this->EventPlace;
    }

    public function removeEventPlace(string $eventPlace): static
    {
        $this->EventPlace = array_values(array_filter(
            $this->EventPlace,
            static fn ($item): bool => $item !== $eventPlace,
        ));

        return $this;
    }

    public function addEventSponsor(EventSponsor $eventSponsor): static
    {
        $this->EventSponsor[] = $eventSponsor;

        return $this;
    }

    public function getEventSponsor(): array
    {
        return $this->EventSponsor;
    }

    public function removeEventSponsor(EventSponsor $eventSponsor): static
    {
        $this->EventSponsor = array_values(array_filter(
            $this->EventSponsor,
            static fn ($item): bool => $item !== $eventSponsor,
        ));

        return $this;
    }

    public function addWebsite(Website $website): static
    {
        $this->Website[] = $website;

        return $this;
    }

    public function getWebsite(): array
    {
        return $this->Website;
    }

    public function removeWebsite(Website $website): static
    {
        $this->Website = array_values(array_filter(
            $this->Website,
            static fn ($item): bool => $item !== $website,
        ));

        return $this;
    }
}
