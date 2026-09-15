<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList92;

class SupplierIdentifier
{
    private ?CodeList92 $SupplierIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setSupplierIDType(CodeList92 $supplierIDType): static
    {
        $this->SupplierIDType = $supplierIDType;

        return $this;
    }

    public function getSupplierIDType(): ?CodeList92
    {
        return $this->SupplierIDType;
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
