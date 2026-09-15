<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList9;

class ProductClassification
{
    private ?CodeList9 $ProductClassificationType = null;

    private ?string $ProductClassificationTypeName = null;

    private ?string $ProductClassificationCode = null;

    private ?string $Percent = null;

    public function setProductClassificationType(CodeList9 $productClassificationType): static
    {
        $this->ProductClassificationType = $productClassificationType;

        return $this;
    }

    public function getProductClassificationType(): ?CodeList9
    {
        return $this->ProductClassificationType;
    }

    public function setProductClassificationTypeName(string $productClassificationTypeName): static
    {
        $this->ProductClassificationTypeName = $productClassificationTypeName;

        return $this;
    }

    public function getProductClassificationTypeName(): ?string
    {
        return $this->ProductClassificationTypeName;
    }

    public function setProductClassificationCode(string $productClassificationCode): static
    {
        $this->ProductClassificationCode = $productClassificationCode;

        return $this;
    }

    public function getProductClassificationCode(): ?string
    {
        return $this->ProductClassificationCode;
    }

    public function setPercent(string $percent): static
    {
        $this->Percent = $percent;

        return $this;
    }

    public function getPercent(): ?string
    {
        return $this->Percent;
    }
}
