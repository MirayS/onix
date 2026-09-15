<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList244;

class EventIdentifier
{
    private ?CodeList244 $EventIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setEventIDType(CodeList244 $eventIDType): static
    {
        $this->EventIDType = $eventIDType;

        return $this;
    }

    public function getEventIDType(): ?CodeList244
    {
        return $this->EventIDType;
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
