<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList57;
use MirayS\Onix\CodeList\CodeList65;

class SupplyDetail
{
    private ?Supplier $Supplier = null;

    private array $SupplyContact = [];

    private array $SupplierOwnCoding = [];

    private array $ReturnsConditions = [];

    private ?CodeList65 $ProductAvailability = null;

    private array $SupplyDate = [];

    private ?int $OrderTime = null;

    private ?NewSupplier $NewSupplier = null;

    private array $Stock = [];

    private ?int $PackQuantity = null;

    private ?int $PalletQuantity = null;

    private array $OrderQuantityMinimum = [];

    private ?int $OrderQuantityMultiple = null;

    private ?CodeList57 $UnpricedItemType = null;

    private array $Price = [];

    public function setSupplier(Supplier $supplier): static
    {
        $this->Supplier = $supplier;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->Supplier;
    }

    public function addSupplyContact(SupplyContact $supplyContact): static
    {
        $this->SupplyContact[] = $supplyContact;

        return $this;
    }

    public function getSupplyContact(): array
    {
        return $this->SupplyContact;
    }

    public function removeSupplyContact(SupplyContact $supplyContact): static
    {
        $this->SupplyContact = array_values(array_filter(
            $this->SupplyContact,
            static fn ($item): bool => $item !== $supplyContact,
        ));

        return $this;
    }

    public function addSupplierOwnCoding(SupplierOwnCoding $supplierOwnCoding): static
    {
        $this->SupplierOwnCoding[] = $supplierOwnCoding;

        return $this;
    }

    public function getSupplierOwnCoding(): array
    {
        return $this->SupplierOwnCoding;
    }

    public function removeSupplierOwnCoding(SupplierOwnCoding $supplierOwnCoding): static
    {
        $this->SupplierOwnCoding = array_values(array_filter(
            $this->SupplierOwnCoding,
            static fn ($item): bool => $item !== $supplierOwnCoding,
        ));

        return $this;
    }

    public function addReturnsConditions(ReturnsConditions $returnsConditions): static
    {
        $this->ReturnsConditions[] = $returnsConditions;

        return $this;
    }

    public function getReturnsConditions(): array
    {
        return $this->ReturnsConditions;
    }

    public function removeReturnsConditions(ReturnsConditions $returnsConditions): static
    {
        $this->ReturnsConditions = array_values(array_filter(
            $this->ReturnsConditions,
            static fn ($item): bool => $item !== $returnsConditions,
        ));

        return $this;
    }

    public function setProductAvailability(CodeList65 $productAvailability): static
    {
        $this->ProductAvailability = $productAvailability;

        return $this;
    }

    public function getProductAvailability(): ?CodeList65
    {
        return $this->ProductAvailability;
    }

    public function addSupplyDate(SupplyDate $supplyDate): static
    {
        $this->SupplyDate[] = $supplyDate;

        return $this;
    }

    public function getSupplyDate(): array
    {
        return $this->SupplyDate;
    }

    public function removeSupplyDate(SupplyDate $supplyDate): static
    {
        $this->SupplyDate = array_values(array_filter(
            $this->SupplyDate,
            static fn ($item): bool => $item !== $supplyDate,
        ));

        return $this;
    }

    public function setOrderTime(int $orderTime): static
    {
        $this->OrderTime = $orderTime;

        return $this;
    }

    public function getOrderTime(): ?int
    {
        return $this->OrderTime;
    }

    public function setNewSupplier(NewSupplier $newSupplier): static
    {
        $this->NewSupplier = $newSupplier;

        return $this;
    }

    public function getNewSupplier(): ?NewSupplier
    {
        return $this->NewSupplier;
    }

    public function addStock(Stock $stock): static
    {
        $this->Stock[] = $stock;

        return $this;
    }

    public function getStock(): array
    {
        return $this->Stock;
    }

    public function removeStock(Stock $stock): static
    {
        $this->Stock = array_values(array_filter(
            $this->Stock,
            static fn ($item): bool => $item !== $stock,
        ));

        return $this;
    }

    public function setPackQuantity(int $packQuantity): static
    {
        $this->PackQuantity = $packQuantity;

        return $this;
    }

    public function getPackQuantity(): ?int
    {
        return $this->PackQuantity;
    }

    public function setPalletQuantity(int $palletQuantity): static
    {
        $this->PalletQuantity = $palletQuantity;

        return $this;
    }

    public function getPalletQuantity(): ?int
    {
        return $this->PalletQuantity;
    }

    public function addOrderQuantityMinimum(int $orderQuantityMinimum): static
    {
        $this->OrderQuantityMinimum[] = $orderQuantityMinimum;

        return $this;
    }

    public function getOrderQuantityMinimum(): array
    {
        return $this->OrderQuantityMinimum;
    }

    public function removeOrderQuantityMinimum(int $orderQuantityMinimum): static
    {
        $this->OrderQuantityMinimum = array_values(array_filter(
            $this->OrderQuantityMinimum,
            static fn ($item): bool => $item !== $orderQuantityMinimum,
        ));

        return $this;
    }

    public function setOrderQuantityMultiple(int $orderQuantityMultiple): static
    {
        $this->OrderQuantityMultiple = $orderQuantityMultiple;

        return $this;
    }

    public function getOrderQuantityMultiple(): ?int
    {
        return $this->OrderQuantityMultiple;
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

    public function addPrice(Price $price): static
    {
        $this->Price[] = $price;

        return $this;
    }

    public function getPrice(): array
    {
        return $this->Price;
    }

    public function removePrice(Price $price): static
    {
        $this->Price = array_values(array_filter(
            $this->Price,
            static fn ($item): bool => $item !== $price,
        ));

        return $this;
    }
}
