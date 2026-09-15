<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList142;
use MirayS\Onix\CodeList\CodeList144;
use MirayS\Onix\CodeList\CodeList174;
use MirayS\Onix\CodeList\CodeList57;
use MirayS\Onix\CodeList\CodeList58;
use MirayS\Onix\CodeList\CodeList59;
use MirayS\Onix\CodeList\CodeList60;
use MirayS\Onix\CodeList\CodeList61;
use MirayS\Onix\CodeList\CodeList96;

class Price
{
    private array $PriceIdentifier = [];

    private ?CodeList58 $PriceType = null;

    private ?CodeList59 $PriceQualifier = null;

    private array $EpubTechnicalProtection = [];

    private array $PriceConstraint = [];

    private array $PriceTypeDescription = [];

    private ?CodeList60 $PricePer = null;

    private array $PriceCondition = [];

    private ?int $MinimumOrderQuantity = null;

    private array $BatchBonus = [];

    private array $DiscountCoded = [];

    private array $Discount = [];

    private ?CodeList61 $PriceStatus = null;

    private ?string $PriceAmount = null;

    private ?PriceCoded $PriceCoded = null;

    private array $Tax = [];

    private ?bool $TaxExempt = null;

    private ?CodeList57 $UnpricedItemType = null;

    private ?CodeList96 $CurrencyCode = null;

    private ?Territory $Territory = null;

    private array $ComparisonProductPrice = [];

    private array $PriceDate = [];

    private ?CodeList174 $PrintedOnProduct = null;

    private ?CodeList142 $PositionOnProduct = null;

    public function addPriceIdentifier(PriceIdentifier $priceIdentifier): static
    {
        $this->PriceIdentifier[] = $priceIdentifier;

        return $this;
    }

    public function getPriceIdentifier(): array
    {
        return $this->PriceIdentifier;
    }

    public function removePriceIdentifier(PriceIdentifier $priceIdentifier): static
    {
        $this->PriceIdentifier = array_values(array_filter(
            $this->PriceIdentifier,
            static fn ($item): bool => $item !== $priceIdentifier,
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

    public function setPriceQualifier(CodeList59 $priceQualifier): static
    {
        $this->PriceQualifier = $priceQualifier;

        return $this;
    }

    public function getPriceQualifier(): ?CodeList59
    {
        return $this->PriceQualifier;
    }

    public function addEpubTechnicalProtection(CodeList144 $epubTechnicalProtection): static
    {
        $this->EpubTechnicalProtection[] = $epubTechnicalProtection;

        return $this;
    }

    public function getEpubTechnicalProtection(): array
    {
        return $this->EpubTechnicalProtection;
    }

    public function removeEpubTechnicalProtection(CodeList144 $epubTechnicalProtection): static
    {
        $this->EpubTechnicalProtection = array_values(array_filter(
            $this->EpubTechnicalProtection,
            static fn ($item): bool => $item !== $epubTechnicalProtection,
        ));

        return $this;
    }

    public function addPriceConstraint(PriceConstraint $priceConstraint): static
    {
        $this->PriceConstraint[] = $priceConstraint;

        return $this;
    }

    public function getPriceConstraint(): array
    {
        return $this->PriceConstraint;
    }

    public function removePriceConstraint(PriceConstraint $priceConstraint): static
    {
        $this->PriceConstraint = array_values(array_filter(
            $this->PriceConstraint,
            static fn ($item): bool => $item !== $priceConstraint,
        ));

        return $this;
    }

    public function addPriceTypeDescription(string $priceTypeDescription): static
    {
        $this->PriceTypeDescription[] = $priceTypeDescription;

        return $this;
    }

    public function getPriceTypeDescription(): array
    {
        return $this->PriceTypeDescription;
    }

    public function removePriceTypeDescription(string $priceTypeDescription): static
    {
        $this->PriceTypeDescription = array_values(array_filter(
            $this->PriceTypeDescription,
            static fn ($item): bool => $item !== $priceTypeDescription,
        ));

        return $this;
    }

    public function setPricePer(CodeList60 $pricePer): static
    {
        $this->PricePer = $pricePer;

        return $this;
    }

    public function getPricePer(): ?CodeList60
    {
        return $this->PricePer;
    }

    public function addPriceCondition(PriceCondition $priceCondition): static
    {
        $this->PriceCondition[] = $priceCondition;

        return $this;
    }

    public function getPriceCondition(): array
    {
        return $this->PriceCondition;
    }

    public function removePriceCondition(PriceCondition $priceCondition): static
    {
        $this->PriceCondition = array_values(array_filter(
            $this->PriceCondition,
            static fn ($item): bool => $item !== $priceCondition,
        ));

        return $this;
    }

    public function setMinimumOrderQuantity(int $minimumOrderQuantity): static
    {
        $this->MinimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    public function getMinimumOrderQuantity(): ?int
    {
        return $this->MinimumOrderQuantity;
    }

    public function addBatchBonus(BatchBonus $batchBonus): static
    {
        $this->BatchBonus[] = $batchBonus;

        return $this;
    }

    public function getBatchBonus(): array
    {
        return $this->BatchBonus;
    }

    public function removeBatchBonus(BatchBonus $batchBonus): static
    {
        $this->BatchBonus = array_values(array_filter(
            $this->BatchBonus,
            static fn ($item): bool => $item !== $batchBonus,
        ));

        return $this;
    }

    public function addDiscountCoded(DiscountCoded $discountCoded): static
    {
        $this->DiscountCoded[] = $discountCoded;

        return $this;
    }

    public function getDiscountCoded(): array
    {
        return $this->DiscountCoded;
    }

    public function removeDiscountCoded(DiscountCoded $discountCoded): static
    {
        $this->DiscountCoded = array_values(array_filter(
            $this->DiscountCoded,
            static fn ($item): bool => $item !== $discountCoded,
        ));

        return $this;
    }

    public function addDiscount(Discount $discount): static
    {
        $this->Discount[] = $discount;

        return $this;
    }

    public function getDiscount(): array
    {
        return $this->Discount;
    }

    public function removeDiscount(Discount $discount): static
    {
        $this->Discount = array_values(array_filter(
            $this->Discount,
            static fn ($item): bool => $item !== $discount,
        ));

        return $this;
    }

    public function setPriceStatus(CodeList61 $priceStatus): static
    {
        $this->PriceStatus = $priceStatus;

        return $this;
    }

    public function getPriceStatus(): ?CodeList61
    {
        return $this->PriceStatus;
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

    public function setPriceCoded(PriceCoded $priceCoded): static
    {
        $this->PriceCoded = $priceCoded;

        return $this;
    }

    public function getPriceCoded(): ?PriceCoded
    {
        return $this->PriceCoded;
    }

    public function addTax(Tax $tax): static
    {
        $this->Tax[] = $tax;

        return $this;
    }

    public function getTax(): array
    {
        return $this->Tax;
    }

    public function removeTax(Tax $tax): static
    {
        $this->Tax = array_values(array_filter(
            $this->Tax,
            static fn ($item): bool => $item !== $tax,
        ));

        return $this;
    }

    public function setTaxExempt(bool $taxExempt): static
    {
        $this->TaxExempt = $taxExempt;

        return $this;
    }

    public function getTaxExempt(): ?bool
    {
        return $this->TaxExempt;
    }

    public function hasTaxExempt(): bool
    {
        return $this->TaxExempt === true;
    }

    public function setUnpricedItemType(CodeList57 $unpricedItemType): static
    {
        $this->UnpricedItemType = $unpricedItemType;

        return $this;
    }

    public function getUnpricedItemType(): ?CodeList57
    {
        return $this->UnpricedItemType;
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

    public function setTerritory(Territory $territory): static
    {
        $this->Territory = $territory;

        return $this;
    }

    public function getTerritory(): ?Territory
    {
        return $this->Territory;
    }

    public function addComparisonProductPrice(ComparisonProductPrice $comparisonProductPrice): static
    {
        $this->ComparisonProductPrice[] = $comparisonProductPrice;

        return $this;
    }

    public function getComparisonProductPrice(): array
    {
        return $this->ComparisonProductPrice;
    }

    public function removeComparisonProductPrice(ComparisonProductPrice $comparisonProductPrice): static
    {
        $this->ComparisonProductPrice = array_values(array_filter(
            $this->ComparisonProductPrice,
            static fn ($item): bool => $item !== $comparisonProductPrice,
        ));

        return $this;
    }

    public function addPriceDate(PriceDate $priceDate): static
    {
        $this->PriceDate[] = $priceDate;

        return $this;
    }

    public function getPriceDate(): array
    {
        return $this->PriceDate;
    }

    public function removePriceDate(PriceDate $priceDate): static
    {
        $this->PriceDate = array_values(array_filter(
            $this->PriceDate,
            static fn ($item): bool => $item !== $priceDate,
        ));

        return $this;
    }

    public function setPrintedOnProduct(CodeList174 $printedOnProduct): static
    {
        $this->PrintedOnProduct = $printedOnProduct;

        return $this;
    }

    public function getPrintedOnProduct(): ?CodeList174
    {
        return $this->PrintedOnProduct;
    }

    public function setPositionOnProduct(CodeList142 $positionOnProduct): static
    {
        $this->PositionOnProduct = $positionOnProduct;

        return $this;
    }

    public function getPositionOnProduct(): ?CodeList142
    {
        return $this->PositionOnProduct;
    }
}
