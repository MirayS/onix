<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class SupplyContactIdentifier
{
    private ?CodeList44 $SupplyContactIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setSupplyContactIDType(CodeList44 $supplyContactIDType): static
    {
        $this->SupplyContactIDType = $supplyContactIDType;

        return $this;
    }

    public function getSupplyContactIDType(): ?CodeList44
    {
        return $this->SupplyContactIDType;
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
