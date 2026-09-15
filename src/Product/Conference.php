<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList20;
use MirayS\Onix\Date;
use MirayS\Onix\Text;

class Conference
{
    private ?CodeList20 $ConferenceRole = null;

    private ?string $ConferenceName = null;

    private ?string $ConferenceAcronym = null;

    private ?string $ConferenceNumber = null;

    private ?Text $ConferenceTheme = null;

    private ?Date $ConferenceDate = null;

    private ?string $ConferencePlace = null;

    private array $ConferenceSponsor = [];

    private array $Website = [];

    public function setConferenceRole(CodeList20 $conferenceRole): static
    {
        $this->ConferenceRole = $conferenceRole;

        return $this;
    }

    public function getConferenceRole(): ?CodeList20
    {
        return $this->ConferenceRole;
    }

    public function setConferenceName(string $conferenceName): static
    {
        $this->ConferenceName = $conferenceName;

        return $this;
    }

    public function getConferenceName(): ?string
    {
        return $this->ConferenceName;
    }

    public function setConferenceAcronym(string $conferenceAcronym): static
    {
        $this->ConferenceAcronym = $conferenceAcronym;

        return $this;
    }

    public function getConferenceAcronym(): ?string
    {
        return $this->ConferenceAcronym;
    }

    public function setConferenceNumber(string $conferenceNumber): static
    {
        $this->ConferenceNumber = $conferenceNumber;

        return $this;
    }

    public function getConferenceNumber(): ?string
    {
        return $this->ConferenceNumber;
    }

    public function setConferenceTheme(Text $conferenceTheme): static
    {
        $this->ConferenceTheme = $conferenceTheme;

        return $this;
    }

    public function getConferenceTheme(): ?Text
    {
        return $this->ConferenceTheme;
    }

    public function setConferenceDate(Date $conferenceDate): static
    {
        $this->ConferenceDate = $conferenceDate;

        return $this;
    }

    public function getConferenceDate(): ?Date
    {
        return $this->ConferenceDate;
    }

    public function setConferencePlace(string $conferencePlace): static
    {
        $this->ConferencePlace = $conferencePlace;

        return $this;
    }

    public function getConferencePlace(): ?string
    {
        return $this->ConferencePlace;
    }

    public function addConferenceSponsor(ConferenceSponsor $conferenceSponsor): static
    {
        $this->ConferenceSponsor[] = $conferenceSponsor;

        return $this;
    }

    public function getConferenceSponsor(): array
    {
        return $this->ConferenceSponsor;
    }

    public function removeConferenceSponsor(ConferenceSponsor $conferenceSponsor): static
    {
        $this->ConferenceSponsor = array_values(array_filter(
            $this->ConferenceSponsor,
            static fn ($item): bool => $item !== $conferenceSponsor,
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
