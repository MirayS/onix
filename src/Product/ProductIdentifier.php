<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList5;

class ProductIdentifier
{
    private ?CodeList5 $ProductIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setProductIDType(CodeList5 $productIDType): static
    {
        $this->ProductIDType = $productIDType;

        return $this;
    }

    public function getProductIDType(): ?CodeList5
    {
        return $this->ProductIDType;
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
