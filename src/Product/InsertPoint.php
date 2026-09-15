<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList255;

class InsertPoint
{
    private ?CodeList255 $InsertPointType = null;

    private ?string $InsertPointValue = null;

    public function setInsertPointType(CodeList255 $insertPointType): static
    {
        $this->InsertPointType = $insertPointType;

        return $this;
    }

    public function getInsertPointType(): ?CodeList255
    {
        return $this->InsertPointType;
    }

    public function setInsertPointValue(string $insertPointValue): static
    {
        $this->InsertPointValue = $insertPointValue;

        return $this;
    }

    public function getInsertPointValue(): ?string
    {
        return $this->InsertPointValue;
    }
}
