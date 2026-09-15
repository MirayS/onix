<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList263;

class PrizeIdentifier
{
    private ?CodeList263 $PrizeIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setPrizeIDType(CodeList263 $prizeIDType): static
    {
        $this->PrizeIDType = $prizeIDType;

        return $this;
    }

    public function getPrizeIDType(): ?CodeList263
    {
        return $this->PrizeIDType;
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
