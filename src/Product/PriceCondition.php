<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList167;

class PriceCondition
{
    private ?CodeList167 $PriceConditionType = null;

    private array $PriceConditionQuantity = [];

    private array $ProductIdentifier = [];

    public function setPriceConditionType(CodeList167 $priceConditionType): static
    {
        $this->PriceConditionType = $priceConditionType;

        return $this;
    }

    public function getPriceConditionType(): ?CodeList167
    {
        return $this->PriceConditionType;
    }

    public function addPriceConditionQuantity(PriceConditionQuantity $priceConditionQuantity): static
    {
        $this->PriceConditionQuantity[] = $priceConditionQuantity;

        return $this;
    }

    public function getPriceConditionQuantity(): array
    {
        return $this->PriceConditionQuantity;
    }

    public function removePriceConditionQuantity(PriceConditionQuantity $priceConditionQuantity): static
    {
        $this->PriceConditionQuantity = array_values(array_filter(
            $this->PriceConditionQuantity,
            static fn ($item): bool => $item !== $priceConditionQuantity,
        ));

        return $this;
    }

    public function addProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier[] = $productIdentifier;

        return $this;
    }

    public function getProductIdentifier(): array
    {
        return $this->ProductIdentifier;
    }

    public function removeProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier = array_values(array_filter(
            $this->ProductIdentifier,
            static fn ($item): bool => $item !== $productIdentifier,
        ));

        return $this;
    }
}
