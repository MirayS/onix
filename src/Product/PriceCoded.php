<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList179;

class PriceCoded
{
    private ?CodeList179 $PriceCodeType = null;

    private ?string $PriceCodeTypeName = null;

    private ?string $PriceCode = null;

    public function setPriceCodeType(CodeList179 $priceCodeType): static
    {
        $this->PriceCodeType = $priceCodeType;

        return $this;
    }

    public function getPriceCodeType(): ?CodeList179
    {
        return $this->PriceCodeType;
    }

    public function setPriceCodeTypeName(string $priceCodeTypeName): static
    {
        $this->PriceCodeTypeName = $priceCodeTypeName;

        return $this;
    }

    public function getPriceCodeTypeName(): ?string
    {
        return $this->PriceCodeTypeName;
    }

    public function setPriceCode(string $priceCode): static
    {
        $this->PriceCode = $priceCode;

        return $this;
    }

    public function getPriceCode(): ?string
    {
        return $this->PriceCode;
    }
}
