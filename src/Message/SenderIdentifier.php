<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

use MirayS\Onix\CodeList\CodeList44;

class SenderIdentifier
{
    private ?CodeList44 $SenderIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setSenderIDType(CodeList44 $senderIDType): static
    {
        $this->SenderIDType = $senderIDType;

        return $this;
    }

    public function getSenderIDType(): ?CodeList44
    {
        return $this->SenderIDType;
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
