<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList161;

class ResourceVersion
{
    private ?CodeList161 $ResourceForm = null;

    private array $ResourceVersionFeature = [];

    private array $ResourceLink = [];

    private array $EpubUsageConstraint = [];

    private array $ContentDate = [];

    public function setResourceForm(CodeList161 $resourceForm): static
    {
        $this->ResourceForm = $resourceForm;

        return $this;
    }

    public function getResourceForm(): ?CodeList161
    {
        return $this->ResourceForm;
    }

    public function addResourceVersionFeature(ResourceVersionFeature $resourceVersionFeature): static
    {
        $this->ResourceVersionFeature[] = $resourceVersionFeature;

        return $this;
    }

    public function getResourceVersionFeature(): array
    {
        return $this->ResourceVersionFeature;
    }

    public function removeResourceVersionFeature(ResourceVersionFeature $resourceVersionFeature): static
    {
        $this->ResourceVersionFeature = array_values(array_filter(
            $this->ResourceVersionFeature,
            static fn ($item): bool => $item !== $resourceVersionFeature,
        ));

        return $this;
    }

    public function addResourceLink(string $resourceLink): static
    {
        $this->ResourceLink[] = $resourceLink;

        return $this;
    }

    public function getResourceLink(): array
    {
        return $this->ResourceLink;
    }

    public function removeResourceLink(string $resourceLink): static
    {
        $this->ResourceLink = array_values(array_filter(
            $this->ResourceLink,
            static fn ($item): bool => $item !== $resourceLink,
        ));

        return $this;
    }

    public function addEpubUsageConstraint(EpubUsageConstraint $epubUsageConstraint): static
    {
        $this->EpubUsageConstraint[] = $epubUsageConstraint;

        return $this;
    }

    public function getEpubUsageConstraint(): array
    {
        return $this->EpubUsageConstraint;
    }

    public function removeEpubUsageConstraint(EpubUsageConstraint $epubUsageConstraint): static
    {
        $this->EpubUsageConstraint = array_values(array_filter(
            $this->EpubUsageConstraint,
            static fn ($item): bool => $item !== $epubUsageConstraint,
        ));

        return $this;
    }

    public function addContentDate(ContentDate $contentDate): static
    {
        $this->ContentDate[] = $contentDate;

        return $this;
    }

    public function getContentDate(): array
    {
        return $this->ContentDate;
    }

    public function removeContentDate(ContentDate $contentDate): static
    {
        $this->ContentDate = array_values(array_filter(
            $this->ContentDate,
            static fn ($item): bool => $item !== $contentDate,
        ));

        return $this;
    }
}
