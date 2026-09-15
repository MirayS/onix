<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList92;

class LocationIdentifier
{
    private ?CodeList92 $LocationIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setLocationIDType(CodeList92 $locationIDType): static
    {
        $this->LocationIDType = $locationIDType;

        return $this;
    }

    public function getLocationIDType(): ?CodeList92
    {
        return $this->LocationIDType;
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
