<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList171;
use MirayS\Onix\CodeList\CodeList62;

class Tax
{
    private array $ProductIdentifier = [];

    private array $PricePartDescription = [];

    private ?CodeList171 $TaxType = null;

    private ?CodeList62 $TaxRateCode = null;

    private ?string $TaxRatePercent = null;

    private ?string $TaxableAmount = null;

    private ?string $TaxAmount = null;

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

    public function addPricePartDescription(string $pricePartDescription): static
    {
        $this->PricePartDescription[] = $pricePartDescription;

        return $this;
    }

    public function getPricePartDescription(): array
    {
        return $this->PricePartDescription;
    }

    public function removePricePartDescription(string $pricePartDescription): static
    {
        $this->PricePartDescription = array_values(array_filter(
            $this->PricePartDescription,
            static fn ($item): bool => $item !== $pricePartDescription,
        ));

        return $this;
    }

    public function setTaxType(CodeList171 $taxType): static
    {
        $this->TaxType = $taxType;

        return $this;
    }

    public function getTaxType(): ?CodeList171
    {
        return $this->TaxType;
    }

    public function setTaxRateCode(CodeList62 $taxRateCode): static
    {
        $this->TaxRateCode = $taxRateCode;

        return $this;
    }

    public function getTaxRateCode(): ?CodeList62
    {
        return $this->TaxRateCode;
    }

    public function setTaxRatePercent(string $taxRatePercent): static
    {
        $this->TaxRatePercent = $taxRatePercent;

        return $this;
    }

    public function getTaxRatePercent(): ?string
    {
        return $this->TaxRatePercent;
    }

    public function setTaxableAmount(string $taxableAmount): static
    {
        $this->TaxableAmount = $taxableAmount;

        return $this;
    }

    public function getTaxableAmount(): ?string
    {
        return $this->TaxableAmount;
    }

    public function setTaxAmount(string $taxAmount): static
    {
        $this->TaxAmount = $taxAmount;

        return $this;
    }

    public function getTaxAmount(): ?string
    {
        return $this->TaxAmount;
    }
}
