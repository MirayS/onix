<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class AffiliationIdentifier
{
    private ?CodeList44 $AffiliationIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setAffiliationIDType(CodeList44 $affiliationIDType): static
    {
        $this->AffiliationIDType = $affiliationIDType;

        return $this;
    }

    public function getAffiliationIDType(): ?CodeList44
    {
        return $this->AffiliationIDType;
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
