<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class CopyrightOwnerIdentifier
{
    private ?CodeList44 $CopyrightOwnerIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setCopyrightOwnerIDType(CodeList44 $copyrightOwnerIDType): static
    {
        $this->CopyrightOwnerIDType = $copyrightOwnerIDType;

        return $this;
    }

    public function getCopyrightOwnerIDType(): ?CodeList44
    {
        return $this->CopyrightOwnerIDType;
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
