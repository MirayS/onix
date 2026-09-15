<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList251;
use MirayS\Onix\CodeList\CodeList252;

class BodyResource
{
    private ?int $SequenceNumber = null;

    private array $ResourceIdentifier = [];

    private ?CodeList251 $ResourceRole = null;

    private array $ResourceFileDetail = [];

    private array $ResourceFileFeature = [];

    private array $ResourceFileDescription = [];

    private array $ResourceFileContentDescription = [];

    private array $ResourceFileLink = [];

    private array $ResourceFileDate = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function addResourceIdentifier(ResourceIdentifier $resourceIdentifier): static
    {
        $this->ResourceIdentifier[] = $resourceIdentifier;

        return $this;
    }

    public function getResourceIdentifier(): array
    {
        return $this->ResourceIdentifier;
    }

    public function removeResourceIdentifier(ResourceIdentifier $resourceIdentifier): static
    {
        $this->ResourceIdentifier = array_values(array_filter(
            $this->ResourceIdentifier,
            static fn ($item): bool => $item !== $resourceIdentifier,
        ));

        return $this;
    }

    public function setResourceRole(CodeList251 $resourceRole): static
    {
        $this->ResourceRole = $resourceRole;

        return $this;
    }

    public function getResourceRole(): ?CodeList251
    {
        return $this->ResourceRole;
    }

    public function addResourceFileDetail(CodeList252 $resourceFileDetail): static
    {
        $this->ResourceFileDetail[] = $resourceFileDetail;

        return $this;
    }

    public function getResourceFileDetail(): array
    {
        return $this->ResourceFileDetail;
    }

    public function removeResourceFileDetail(CodeList252 $resourceFileDetail): static
    {
        $this->ResourceFileDetail = array_values(array_filter(
            $this->ResourceFileDetail,
            static fn ($item): bool => $item !== $resourceFileDetail,
        ));

        return $this;
    }

    public function addResourceFileFeature(ResourceFileFeature $resourceFileFeature): static
    {
        $this->ResourceFileFeature[] = $resourceFileFeature;

        return $this;
    }

    public function getResourceFileFeature(): array
    {
        return $this->ResourceFileFeature;
    }

    public function removeResourceFileFeature(ResourceFileFeature $resourceFileFeature): static
    {
        $this->ResourceFileFeature = array_values(array_filter(
            $this->ResourceFileFeature,
            static fn ($item): bool => $item !== $resourceFileFeature,
        ));

        return $this;
    }

    public function addResourceFileDescription(string $resourceFileDescription): static
    {
        $this->ResourceFileDescription[] = $resourceFileDescription;

        return $this;
    }

    public function getResourceFileDescription(): array
    {
        return $this->ResourceFileDescription;
    }

    public function removeResourceFileDescription(string $resourceFileDescription): static
    {
        $this->ResourceFileDescription = array_values(array_filter(
            $this->ResourceFileDescription,
            static fn ($item): bool => $item !== $resourceFileDescription,
        ));

        return $this;
    }

    public function addResourceFileContentDescription(string $resourceFileContentDescription): static
    {
        $this->ResourceFileContentDescription[] = $resourceFileContentDescription;

        return $this;
    }

    public function getResourceFileContentDescription(): array
    {
        return $this->ResourceFileContentDescription;
    }

    public function removeResourceFileContentDescription(string $resourceFileContentDescription): static
    {
        $this->ResourceFileContentDescription = array_values(array_filter(
            $this->ResourceFileContentDescription,
            static fn ($item): bool => $item !== $resourceFileContentDescription,
        ));

        return $this;
    }

    public function addResourceFileLink(string $resourceFileLink): static
    {
        $this->ResourceFileLink[] = $resourceFileLink;

        return $this;
    }

    public function getResourceFileLink(): array
    {
        return $this->ResourceFileLink;
    }

    public function removeResourceFileLink(string $resourceFileLink): static
    {
        $this->ResourceFileLink = array_values(array_filter(
            $this->ResourceFileLink,
            static fn ($item): bool => $item !== $resourceFileLink,
        ));

        return $this;
    }

    public function addResourceFileDate(ResourceFileDate $resourceFileDate): static
    {
        $this->ResourceFileDate[] = $resourceFileDate;

        return $this;
    }

    public function getResourceFileDate(): array
    {
        return $this->ResourceFileDate;
    }

    public function removeResourceFileDate(ResourceFileDate $resourceFileDate): static
    {
        $this->ResourceFileDate = array_values(array_filter(
            $this->ResourceFileDate,
            static fn ($item): bool => $item !== $resourceFileDate,
        ));

        return $this;
    }
}
