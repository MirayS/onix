<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList154;
use MirayS\Onix\CodeList\CodeList158;
use MirayS\Onix\CodeList\CodeList159;

class SupportingResource
{
    private ?int $SequenceNumber = null;

    private ?CodeList158 $ResourceContentType = null;

    private array $ContentAudience = [];

    private ?Territory $Territory = null;

    private ?CodeList159 $ResourceMode = null;

    private array $ResourceFeature = [];

    private array $ResourceVersion = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function setResourceContentType(CodeList158 $resourceContentType): static
    {
        $this->ResourceContentType = $resourceContentType;

        return $this;
    }

    public function getResourceContentType(): ?CodeList158
    {
        return $this->ResourceContentType;
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

    public function setTerritory(Territory $territory): static
    {
        $this->Territory = $territory;

        return $this;
    }

    public function getTerritory(): ?Territory
    {
        return $this->Territory;
    }

    public function setResourceMode(CodeList159 $resourceMode): static
    {
        $this->ResourceMode = $resourceMode;

        return $this;
    }

    public function getResourceMode(): ?CodeList159
    {
        return $this->ResourceMode;
    }

    public function addResourceFeature(ResourceFeature $resourceFeature): static
    {
        $this->ResourceFeature[] = $resourceFeature;

        return $this;
    }

    public function getResourceFeature(): array
    {
        return $this->ResourceFeature;
    }

    public function removeResourceFeature(ResourceFeature $resourceFeature): static
    {
        $this->ResourceFeature = array_values(array_filter(
            $this->ResourceFeature,
            static fn ($item): bool => $item !== $resourceFeature,
        ));

        return $this;
    }

    public function addResourceVersion(ResourceVersion $resourceVersion): static
    {
        $this->ResourceVersion[] = $resourceVersion;

        return $this;
    }

    public function getResourceVersion(): array
    {
        return $this->ResourceVersion;
    }

    public function removeResourceVersion(ResourceVersion $resourceVersion): static
    {
        $this->ResourceVersion = array_values(array_filter(
            $this->ResourceVersion,
            static fn ($item): bool => $item !== $resourceVersion,
        ));

        return $this;
    }
}
