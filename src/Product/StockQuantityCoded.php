<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList70;

class StockQuantityCoded
{
    private ?CodeList70 $StockQuantityCodeType = null;

    private ?string $StockQuantityCodeTypeName = null;

    private ?string $StockQuantityCode = null;

    public function setStockQuantityCodeType(CodeList70 $stockQuantityCodeType): static
    {
        $this->StockQuantityCodeType = $stockQuantityCodeType;

        return $this;
    }

    public function getStockQuantityCodeType(): ?CodeList70
    {
        return $this->StockQuantityCodeType;
    }

    public function setStockQuantityCodeTypeName(string $stockQuantityCodeTypeName): static
    {
        $this->StockQuantityCodeTypeName = $stockQuantityCodeTypeName;

        return $this;
    }

    public function getStockQuantityCodeTypeName(): ?string
    {
        return $this->StockQuantityCodeTypeName;
    }

    public function setStockQuantityCode(string $stockQuantityCode): static
    {
        $this->StockQuantityCode = $stockQuantityCode;

        return $this;
    }

    public function getStockQuantityCode(): ?string
    {
        return $this->StockQuantityCode;
    }
}
