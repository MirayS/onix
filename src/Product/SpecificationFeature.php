<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList249;

class SpecificationFeature
{
    private ?CodeList249 $SpecificationFeatureType = null;

    private ?string $SpecificationFeatureValue = null;

    private array $SpecificationFeatureDescription = [];

    public function setSpecificationFeatureType(CodeList249 $specificationFeatureType): static
    {
        $this->SpecificationFeatureType = $specificationFeatureType;

        return $this;
    }

    public function getSpecificationFeatureType(): ?CodeList249
    {
        return $this->SpecificationFeatureType;
    }

    public function setSpecificationFeatureValue(string $specificationFeatureValue): static
    {
        $this->SpecificationFeatureValue = $specificationFeatureValue;

        return $this;
    }

    public function getSpecificationFeatureValue(): ?string
    {
        return $this->SpecificationFeatureValue;
    }

    public function addSpecificationFeatureDescription(string $specificationFeatureDescription): static
    {
        $this->SpecificationFeatureDescription[] = $specificationFeatureDescription;

        return $this;
    }

    public function getSpecificationFeatureDescription(): array
    {
        return $this->SpecificationFeatureDescription;
    }

    public function removeSpecificationFeatureDescription(string $specificationFeatureDescription): static
    {
        $this->SpecificationFeatureDescription = array_values(array_filter(
            $this->SpecificationFeatureDescription,
            static fn ($item): bool => $item !== $specificationFeatureDescription,
        ));

        return $this;
    }
}
