<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class ProductContactIdentifier
{
    private ?CodeList44 $ProductContactIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setProductContactIDType(CodeList44 $productContactIDType): static
    {
        $this->ProductContactIDType = $productContactIDType;

        return $this;
    }

    public function getProductContactIDType(): ?CodeList44
    {
        return $this->ProductContactIDType;
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
