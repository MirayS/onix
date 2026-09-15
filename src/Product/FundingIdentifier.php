<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList228;

class FundingIdentifier
{
    private ?CodeList228 $FundingIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setFundingIDType(CodeList228 $fundingIDType): static
    {
        $this->FundingIDType = $fundingIDType;

        return $this;
    }

    public function getFundingIDType(): ?CodeList228
    {
        return $this->FundingIDType;
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
