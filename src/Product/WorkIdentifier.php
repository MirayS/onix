<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList16;

class WorkIdentifier
{
    private ?CodeList16 $WorkIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setWorkIDType(CodeList16 $workIDType): static
    {
        $this->WorkIDType = $workIDType;

        return $this;
    }

    public function getWorkIDType(): ?CodeList16
    {
        return $this->WorkIDType;
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
