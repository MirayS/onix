<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

use MirayS\Onix\CodeList\CodeList44;

class AddresseeIdentifier
{
    private ?CodeList44 $AddresseeIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setAddresseeIDType(CodeList44 $addresseeIDType): static
    {
        $this->AddresseeIDType = $addresseeIDType;

        return $this;
    }

    public function getAddresseeIDType(): ?CodeList44
    {
        return $this->AddresseeIDType;
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
