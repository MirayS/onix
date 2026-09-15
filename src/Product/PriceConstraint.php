<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList146;
use MirayS\Onix\CodeList\CodeList230;

class PriceConstraint
{
    private ?CodeList230 $PriceConstraintType = null;

    private ?CodeList146 $PriceConstraintStatus = null;

    private array $PriceConstraintLimit = [];

    public function setPriceConstraintType(CodeList230 $priceConstraintType): static
    {
        $this->PriceConstraintType = $priceConstraintType;

        return $this;
    }

    public function getPriceConstraintType(): ?CodeList230
    {
        return $this->PriceConstraintType;
    }

    public function setPriceConstraintStatus(CodeList146 $priceConstraintStatus): static
    {
        $this->PriceConstraintStatus = $priceConstraintStatus;

        return $this;
    }

    public function getPriceConstraintStatus(): ?CodeList146
    {
        return $this->PriceConstraintStatus;
    }

    public function addPriceConstraintLimit(PriceConstraintLimit $priceConstraintLimit): static
    {
        $this->PriceConstraintLimit[] = $priceConstraintLimit;

        return $this;
    }

    public function getPriceConstraintLimit(): array
    {
        return $this->PriceConstraintLimit;
    }

    public function removePriceConstraintLimit(PriceConstraintLimit $priceConstraintLimit): static
    {
        $this->PriceConstraintLimit = array_values(array_filter(
            $this->PriceConstraintLimit,
            static fn ($item): bool => $item !== $priceConstraintLimit,
        ));

        return $this;
    }
}
