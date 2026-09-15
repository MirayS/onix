<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList154;
use MirayS\Onix\CodeList\CodeList245;
use MirayS\Onix\CodeList\CodeList246;
use MirayS\Onix\Text;

class PromotionalEvent
{
    private array $EventIdentifier = [];

    private array $EventType = [];

    private ?CodeList246 $EventStatus = null;

    private array $ContentAudience = [];

    private array $EventName = [];

    private array $ContributorReference = [];

    private array $Contributor = [];

    private array $ContributorStatement = [];

    private ?bool $NoContributor = null;

    private array $EventDescription = [];

    private array $EventOccurrence = [];

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

    public function addEventType(CodeList245 $eventType): static
    {
        $this->EventType[] = $eventType;

        return $this;
    }

    public function getEventType(): array
    {
        return $this->EventType;
    }

    public function removeEventType(CodeList245 $eventType): static
    {
        $this->EventType = array_values(array_filter(
            $this->EventType,
            static fn ($item): bool => $item !== $eventType,
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

    public function addContentAudience(CodeList154 $contentAudience): static
    {
        $this->ContentAudience[] = $contentAudience;

        return $this;
    }

    public function getContentAudience(): array
    {
        return $this->ContentAudience;
    }

    public function removeContentAudience(CodeList154 $contentAudience): static
    {
        $this->ContentAudience = array_values(array_filter(
            $this->ContentAudience,
            static fn ($item): bool => $item !== $contentAudience,
        ));

        return $this;
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

    public function addContributorReference(ContributorReference $contributorReference): static
    {
        $this->ContributorReference[] = $contributorReference;

        return $this;
    }

    public function getContributorReference(): array
    {
        return $this->ContributorReference;
    }

    public function removeContributorReference(ContributorReference $contributorReference): static
    {
        $this->ContributorReference = array_values(array_filter(
            $this->ContributorReference,
            static fn ($item): bool => $item !== $contributorReference,
        ));

        return $this;
    }

    public function addContributor(Contributor $contributor): static
    {
        $this->Contributor[] = $contributor;

        return $this;
    }

    public function getContributor(): array
    {
        return $this->Contributor;
    }

    public function removeContributor(Contributor $contributor): static
    {
        $this->Contributor = array_values(array_filter(
            $this->Contributor,
            static fn ($item): bool => $item !== $contributor,
        ));

        return $this;
    }

    public function addContributorStatement(Text $contributorStatement): static
    {
        $this->ContributorStatement[] = $contributorStatement;

        return $this;
    }

    public function getContributorStatement(): array
    {
        return $this->ContributorStatement;
    }

    public function removeContributorStatement(Text $contributorStatement): static
    {
        $this->ContributorStatement = array_values(array_filter(
            $this->ContributorStatement,
            static fn ($item): bool => $item !== $contributorStatement,
        ));

        return $this;
    }

    public function setNoContributor(bool $noContributor): static
    {
        $this->NoContributor = $noContributor;

        return $this;
    }

    public function getNoContributor(): ?bool
    {
        return $this->NoContributor;
    }

    public function hasNoContributor(): bool
    {
        return $this->NoContributor === true;
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

    public function addEventOccurrence(EventOccurrence $eventOccurrence): static
    {
        $this->EventOccurrence[] = $eventOccurrence;

        return $this;
    }

    public function getEventOccurrence(): array
    {
        return $this->EventOccurrence;
    }

    public function removeEventOccurrence(EventOccurrence $eventOccurrence): static
    {
        $this->EventOccurrence = array_values(array_filter(
            $this->EventOccurrence,
            static fn ($item): bool => $item !== $eventOccurrence,
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
