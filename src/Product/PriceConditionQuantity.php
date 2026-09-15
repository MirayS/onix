<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList168;
use MirayS\Onix\CodeList\CodeList169;

class PriceConditionQuantity
{
    private ?CodeList168 $PriceConditionQuantityType = null;

    private ?string $Quantity = null;

    private ?CodeList169 $QuantityUnit = null;

    public function setPriceConditionQuantityType(CodeList168 $priceConditionQuantityType): static
    {
        $this->PriceConditionQuantityType = $priceConditionQuantityType;

        return $this;
    }

    public function getPriceConditionQuantityType(): ?CodeList168
    {
        return $this->PriceConditionQuantityType;
    }

    public function setQuantity(string $quantity): static
    {
        $this->Quantity = $quantity;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setQuantityUnit(CodeList169 $quantityUnit): static
    {
        $this->QuantityUnit = $quantityUnit;

        return $this;
    }

    public function getQuantityUnit(): ?CodeList169
    {
        return $this->QuantityUnit;
    }
}
