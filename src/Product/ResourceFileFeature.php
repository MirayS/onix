<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList253;

class ResourceFileFeature
{
    private ?CodeList253 $ResourceFileFeatureType = null;

    private ?string $ResourceFileFeatureValue = null;

    private array $ResourceFileFeatureDescription = [];

    public function setResourceFileFeatureType(CodeList253 $resourceFileFeatureType): static
    {
        $this->ResourceFileFeatureType = $resourceFileFeatureType;

        return $this;
    }

    public function getResourceFileFeatureType(): ?CodeList253
    {
        return $this->ResourceFileFeatureType;
    }

    public function setResourceFileFeatureValue(string $resourceFileFeatureValue): static
    {
        $this->ResourceFileFeatureValue = $resourceFileFeatureValue;

        return $this;
    }

    public function getResourceFileFeatureValue(): ?string
    {
        return $this->ResourceFileFeatureValue;
    }

    public function addResourceFileFeatureDescription(string $resourceFileFeatureDescription): static
    {
        $this->ResourceFileFeatureDescription[] = $resourceFileFeatureDescription;

        return $this;
    }

    public function getResourceFileFeatureDescription(): array
    {
        return $this->ResourceFileFeatureDescription;
    }

    public function removeResourceFileFeatureDescription(string $resourceFileFeatureDescription): static
    {
        $this->ResourceFileFeatureDescription = array_values(array_filter(
            $this->ResourceFileFeatureDescription,
            static fn ($item): bool => $item !== $resourceFileFeatureDescription,
        ));

        return $this;
    }
}
