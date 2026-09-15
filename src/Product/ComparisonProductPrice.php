<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList58;
use MirayS\Onix\CodeList\CodeList96;

class ComparisonProductPrice
{
    private array $ProductIdentifier = [];

    private ?CodeList58 $PriceType = null;

    private ?string $PriceAmount = null;

    private ?CodeList96 $CurrencyCode = null;

    public function addProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier[] = $productIdentifier;

        return $this;
    }

    public function getProductIdentifier(): array
    {
        return $this->ProductIdentifier;
    }

    public function removeProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier = array_values(array_filter(
            $this->ProductIdentifier,
            static fn ($item): bool => $item !== $productIdentifier,
        ));

        return $this;
    }

    public function setPriceType(CodeList58 $priceType): static
    {
        $this->PriceType = $priceType;

        return $this;
    }

    public function getPriceType(): ?CodeList58
    {
        return $this->PriceType;
    }

    public function setPriceAmount(string $priceAmount): static
    {
        $this->PriceAmount = $priceAmount;

        return $this;
    }

    public function getPriceAmount(): ?string
    {
        return $this->PriceAmount;
    }

    public function setCurrencyCode(CodeList96 $currencyCode): static
    {
        $this->CurrencyCode = $currencyCode;

        return $this;
    }

    public function getCurrencyCode(): ?CodeList96
    {
        return $this->CurrencyCode;
    }
}
