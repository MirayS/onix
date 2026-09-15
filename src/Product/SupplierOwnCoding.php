<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList165;

class SupplierOwnCoding
{
    private ?CodeList165 $SupplierCodeType = null;

    private ?string $SupplierCodeTypeName = null;

    private ?string $SupplierCodeValue = null;

    public function setSupplierCodeType(CodeList165 $supplierCodeType): static
    {
        $this->SupplierCodeType = $supplierCodeType;

        return $this;
    }

    public function getSupplierCodeType(): ?CodeList165
    {
        return $this->SupplierCodeType;
    }

    public function setSupplierCodeTypeName(string $supplierCodeTypeName): static
    {
        $this->SupplierCodeTypeName = $supplierCodeTypeName;

        return $this;
    }

    public function getSupplierCodeTypeName(): ?string
    {
        return $this->SupplierCodeTypeName;
    }

    public function setSupplierCodeValue(string $supplierCodeValue): static
    {
        $this->SupplierCodeValue = $supplierCodeValue;

        return $this;
    }

    public function getSupplierCodeValue(): ?string
    {
        return $this->SupplierCodeValue;
    }
}
