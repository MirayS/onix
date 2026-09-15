<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList217;

class PriceIdentifier
{
    private ?CodeList217 $PriceIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setPriceIDType(CodeList217 $priceIDType): static
    {
        $this->PriceIDType = $priceIDType;

        return $this;
    }

    public function getPriceIDType(): ?CodeList217
    {
        return $this->PriceIDType;
    }

    public function setIDTypeName(string $iDTypeName): static
    {
        $this->IDTypeName = $iDTypeName;

        return $this;
    }

    public function getIDTypeName(): ?string
    {
        return $this->IDTypeName;
    }

    public function setIDValue(string $iDValue): static
    {
        $this->IDValue = $iDValue;

        return $this;
    }

    public function getIDValue(): ?string
    {
        return $this->IDValue;
    }
}
