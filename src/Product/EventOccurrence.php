<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList246;
use MirayS\Onix\CodeList\CodeList49;
use MirayS\Onix\CodeList\CodeList91;
use MirayS\Onix\Text;

class EventOccurrence
{
    private array $EventIdentifier = [];

    private array $OccurrenceDate = [];

    private ?CodeList246 $EventStatus = null;

    private ?CodeList91 $CountryCode = null;

    private ?CodeList49 $RegionCode = null;

    private array $LocationName = [];

    private ?string $VenueName = null;

    private ?string $StreetAddress = null;

    private ?string $PostalCode = null;

    private array $VenueNote = [];

    private array $EventDescription = [];

    private array $SupportingResource = [];

    private array $EventSponsor = [];

    private array $Website = [];

    public function addEventIdentifier(EventIdentifier $eventIdentifier): static
    {
        $this->EventIdentifier[] = $eventIdentifier;

        return $this;
    }

    public function getEventIdentifier(): array
    {
        return $this->EventIdentifier;
    }

    public function removeEventIdentifier(EventIdentifier $eventIdentifier): static
    {
        $this->EventIdentifier = array_values(array_filter(
            $this->EventIdentifier,
            static fn ($item): bool => $item !== $eventIdentifier,
        ));

        return $this;
    }

    public function addOccurrenceDate(OccurrenceDate $occurrenceDate): static
    {
        $this->OccurrenceDate[] = $occurrenceDate;

        return $this;
    }

    public function getOccurrenceDate(): array
    {
        return $this->OccurrenceDate;
    }

    public function removeOccurrenceDate(OccurrenceDate $occurrenceDate): static
    {
        $this->OccurrenceDate = array_values(array_filter(
            $this->OccurrenceDate,
            static fn ($item): bool => $item !== $occurrenceDate,
        ));

        return $this;
    }

    public function setEventStatus(CodeList246 $eventStatus): static
    {
        $this->EventStatus = $eventStatus;

        return $this;
    }

    public function getEventStatus(): ?CodeList246
    {
        return $this->EventStatus;
    }

    public function setCountryCode(CodeList91 $countryCode): static
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    public function getCountryCode(): ?CodeList91
    {
        return $this->CountryCode;
    }

    public function setRegionCode(CodeList49 $regionCode): static
    {
        $this->RegionCode = $regionCode;

        return $this;
    }

    public function getRegionCode(): ?CodeList49
    {
        return $this->RegionCode;
    }

    public function addLocationName(string $locationName): static
    {
        $this->LocationName[] = $locationName;

        return $this;
    }

    public function getLocationName(): array
    {
        return $this->LocationName;
    }

    public function removeLocationName(string $locationName): static
    {
        $this->LocationName = array_values(array_filter(
            $this->LocationName,
            static fn ($item): bool => $item !== $locationName,
        ));

        return $this;
    }

    public function setVenueName(string $venueName): static
    {
        $this->VenueName = $venueName;

        return $this;
    }

    public function getVenueName(): ?string
    {
        return $this->VenueName;
    }

    public function setStreetAddress(string $streetAddress): static
    {
        $this->StreetAddress = $streetAddress;

        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->StreetAddress;
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->PostalCode = $postalCode;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    public function addVenueNote(Text $venueNote): static
    {
        $this->VenueNote[] = $venueNote;

        return $this;
    }

    public function getVenueNote(): array
    {
        return $this->VenueNote;
    }

    public function removeVenueNote(Text $venueNote): static
    {
        $this->VenueNote = array_values(array_filter(
            $this->VenueNote,
            static fn ($item): bool => $item !== $venueNote,
        ));

        return $this;
    }

    public function addEventDescription(Text $eventDescription): static
    {
        $this->EventDescription[] = $eventDescription;

        return $this;
    }

    public function getEventDescription(): array
    {
        return $this->EventDescription;
    }

    public function removeEventDescription(Text $eventDescription): static
    {
        $this->EventDescription = array_values(array_filter(
            $this->EventDescription,
            static fn ($item): bool => $item !== $eventDescription,
        ));

        return $this;
    }

    public function addSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource[] = $supportingResource;

        return $this;
    }

    public function getSupportingResource(): array
    {
        return $this->SupportingResource;
    }

    public function removeSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource = array_values(array_filter(
            $this->SupportingResource,
            static fn ($item): bool => $item !== $supportingResource,
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
