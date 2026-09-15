<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList147;

class PriceConstraintLimit
{
    private ?string $Quantity = null;

    private ?CodeList147 $PriceConstraintUnit = null;

    public function setQuantity(string $quantity): static
    {
        $this->Quantity = $quantity;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setPriceConstraintUnit(CodeList147 $priceConstraintUnit): static
    {
        $this->PriceConstraintUnit = $priceConstraintUnit;

        return $this;
    }

    public function getPriceConstraintUnit(): ?CodeList147
    {
        return $this->PriceConstraintUnit;
    }
}
