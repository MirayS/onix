<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class ConferenceSponsorIdentifier
{
    private ?CodeList44 $ConferenceSponsorIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setConferenceSponsorIDType(CodeList44 $conferenceSponsorIDType): static
    {
        $this->ConferenceSponsorIDType = $conferenceSponsorIDType;

        return $this;
    }

    public function getConferenceSponsorIDType(): ?CodeList44
    {
        return $this->ConferenceSponsorIDType;
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
