<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class EventSponsorIdentifier
{
    private ?CodeList44 $EventSponsorIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setEventSponsorIDType(CodeList44 $eventSponsorIDType): static
    {
        $this->EventSponsorIDType = $eventSponsorIDType;

        return $this;
    }

    public function getEventSponsorIDType(): ?CodeList44
    {
        return $this->EventSponsorIDType;
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
