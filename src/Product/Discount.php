<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList170;

class Discount
{
    private ?CodeList170 $DiscountType = null;

    private ?string $Quantity = null;

    private ?string $ToQuantity = null;

    private ?string $DiscountPercent = null;

    private ?string $DiscountAmount = null;

    public function setDiscountType(CodeList170 $discountType): static
    {
        $this->DiscountType = $discountType;

        return $this;
    }

    public function getDiscountType(): ?CodeList170
    {
        return $this->DiscountType;
    }

    public function setQuantity(string $quantity): static
    {
        $this->Quantity = $quantity;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setToQuantity(string $toQuantity): static
    {
        $this->ToQuantity = $toQuantity;

        return $this;
    }

    public function getToQuantity(): ?string
    {
        return $this->ToQuantity;
    }

    public function setDiscountPercent(string $discountPercent): static
    {
        $this->DiscountPercent = $discountPercent;

        return $this;
    }

    public function getDiscountPercent(): ?string
    {
        return $this->DiscountPercent;
    }

    public function setDiscountAmount(string $discountAmount): static
    {
        $this->DiscountAmount = $discountAmount;

        return $this;
    }

    public function getDiscountAmount(): ?string
    {
        return $this->DiscountAmount;
    }
}
