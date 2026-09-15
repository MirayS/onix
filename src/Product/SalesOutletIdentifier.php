<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList102;

class SalesOutletIdentifier
{
    private ?CodeList102 $SalesOutletIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setSalesOutletIDType(CodeList102 $salesOutletIDType): static
    {
        $this->SalesOutletIDType = $salesOutletIDType;

        return $this;
    }

    public function getSalesOutletIDType(): ?CodeList102
    {
        return $this->SalesOutletIDType;
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
