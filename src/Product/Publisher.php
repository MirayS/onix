<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList45;

class Publisher
{
    private ?CodeList45 $PublishingRole = null;

    private array $PublisherIdentifier = [];

    private array $PublisherName = [];

    private array $PublisherNameInverted = [];

    private array $Funding = [];

    private array $Website = [];

    public function setPublishingRole(CodeList45 $publishingRole): static
    {
        $this->PublishingRole = $publishingRole;

        return $this;
    }

    public function getPublishingRole(): ?CodeList45
    {
        return $this->PublishingRole;
    }

    public function addPublisherIdentifier(PublisherIdentifier $publisherIdentifier): static
    {
        $this->PublisherIdentifier[] = $publisherIdentifier;

        return $this;
    }

    public function getPublisherIdentifier(): array
    {
        return $this->PublisherIdentifier;
    }

    public function removePublisherIdentifier(PublisherIdentifier $publisherIdentifier): static
    {
        $this->PublisherIdentifier = array_values(array_filter(
            $this->PublisherIdentifier,
            static fn ($item): bool => $item !== $publisherIdentifier,
        ));

        return $this;
    }

    public function addPublisherName(string $publisherName): static
    {
        $this->PublisherName[] = $publisherName;

        return $this;
    }

    public function getPublisherName(): array
    {
        return $this->PublisherName;
    }

    public function removePublisherName(string $publisherName): static
    {
        $this->PublisherName = array_values(array_filter(
            $this->PublisherName,
            static fn ($item): bool => $item !== $publisherName,
        ));

        return $this;
    }

    public function addPublisherNameInverted(string $publisherNameInverted): static
    {
        $this->PublisherNameInverted[] = $publisherNameInverted;

        return $this;
    }

    public function getPublisherNameInverted(): array
    {
        return $this->PublisherNameInverted;
    }

    public function removePublisherNameInverted(string $publisherNameInverted): static
    {
        $this->PublisherNameInverted = array_values(array_filter(
            $this->PublisherNameInverted,
            static fn ($item): bool => $item !== $publisherNameInverted,
        ));

        return $this;
    }

    public function addFunding(Funding $funding): static
    {
        $this->Funding[] = $funding;

        return $this;
    }

    public function getFunding(): array
    {
        return $this->Funding;
    }

    public function removeFunding(Funding $funding): static
    {
        $this->Funding = array_values(array_filter(
            $this->Funding,
            static fn ($item): bool => $item !== $funding,
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
