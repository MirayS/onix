<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList100;

class DiscountCoded
{
    private ?CodeList100 $DiscountCodeType = null;

    private ?string $DiscountCodeTypeName = null;

    private ?string $DiscountCode = null;

    public function setDiscountCodeType(CodeList100 $discountCodeType): static
    {
        $this->DiscountCodeType = $discountCodeType;

        return $this;
    }

    public function getDiscountCodeType(): ?CodeList100
    {
        return $this->DiscountCodeType;
    }

    public function setDiscountCodeTypeName(string $discountCodeTypeName): static
    {
        $this->DiscountCodeTypeName = $discountCodeTypeName;

        return $this;
    }

    public function getDiscountCodeTypeName(): ?string
    {
        return $this->DiscountCodeTypeName;
    }

    public function setDiscountCode(string $discountCode): static
    {
        $this->DiscountCode = $discountCode;

        return $this;
    }

    public function getDiscountCode(): ?string
    {
        return $this->DiscountCode;
    }
}
