<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList43;

class TextItemIdentifier
{
    private ?CodeList43 $TextItemIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setTextItemIDType(CodeList43 $textItemIDType): static
    {
        $this->TextItemIDType = $textItemIDType;

        return $this;
    }

    public function getTextItemIDType(): ?CodeList43
    {
        return $this->TextItemIDType;
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
