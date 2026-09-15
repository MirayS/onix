<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class NameIdentifier
{
    private ?CodeList44 $NameIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setNameIDType(CodeList44 $nameIDType): static
    {
        $this->NameIDType = $nameIDType;

        return $this;
    }

    public function getNameIDType(): ?CodeList44
    {
        return $this->NameIDType;
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
