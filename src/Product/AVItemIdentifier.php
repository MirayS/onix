<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList241;

class AVItemIdentifier
{
    private ?CodeList241 $AVItemIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setAVItemIDType(CodeList241 $aVItemIDType): static
    {
        $this->AVItemIDType = $aVItemIDType;

        return $this;
    }

    public function getAVItemIDType(): ?CodeList241
    {
        return $this->AVItemIDType;
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
