<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class ImprintIdentifier
{
    private ?CodeList44 $ImprintIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setImprintIDType(CodeList44 $imprintIDType): static
    {
        $this->ImprintIDType = $imprintIDType;

        return $this;
    }

    public function getImprintIDType(): ?CodeList44
    {
        return $this->ImprintIDType;
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
