<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList250;

class ResourceIdentifier
{
    private ?CodeList250 $ResourceIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setResourceIDType(CodeList250 $resourceIDType): static
    {
        $this->ResourceIDType = $resourceIDType;

        return $this;
    }

    public function getResourceIDType(): ?CodeList250
    {
        return $this->ResourceIDType;
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
