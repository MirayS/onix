<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList79;

class ProductFormFeature
{
    private ?CodeList79 $ProductFormFeatureType = null;

    private ?string $ProductFormFeatureValue = null;

    private array $ProductFormFeatureDescription = [];

    public function setProductFormFeatureType(CodeList79 $productFormFeatureType): static
    {
        $this->ProductFormFeatureType = $productFormFeatureType;

        return $this;
    }

    public function getProductFormFeatureType(): ?CodeList79
    {
        return $this->ProductFormFeatureType;
    }

    public function setProductFormFeatureValue(string $productFormFeatureValue): static
    {
        $this->ProductFormFeatureValue = $productFormFeatureValue;

        return $this;
    }

    public function getProductFormFeatureValue(): ?string
    {
        return $this->ProductFormFeatureValue;
    }

    public function addProductFormFeatureDescription(string $productFormFeatureDescription): static
    {
        $this->ProductFormFeatureDescription[] = $productFormFeatureDescription;

        return $this;
    }

    public function getProductFormFeatureDescription(): array
    {
        return $this->ProductFormFeatureDescription;
    }

    public function removeProductFormFeatureDescription(string $productFormFeatureDescription): static
    {
        $this->ProductFormFeatureDescription = array_values(array_filter(
            $this->ProductFormFeatureDescription,
            static fn ($item): bool => $item !== $productFormFeatureDescription,
        ));

        return $this;
    }
}
