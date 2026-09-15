<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class RecordSourceIdentifier
{
    private ?CodeList44 $RecordSourceIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setRecordSourceIDType(CodeList44 $recordSourceIDType): static
    {
        $this->RecordSourceIDType = $recordSourceIDType;

        return $this;
    }

    public function getRecordSourceIDType(): ?CodeList44
    {
        return $this->RecordSourceIDType;
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
