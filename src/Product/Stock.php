<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList215;

class Stock
{
    private array $LocationIdentifier = [];

    private array $LocationName = [];

    private array $StockQuantityCoded = [];

    private ?int $OnHand = null;

    private ?CodeList215 $Proximity = null;

    private ?int $Reserved = null;

    private ?int $OnOrder = null;

    private ?int $CBO = null;

    private array $OnOrderDetail = [];

    private array $Velocity = [];

    public function addLocationIdentifier(LocationIdentifier $locationIdentifier): static
    {
        $this->LocationIdentifier[] = $locationIdentifier;

        return $this;
    }

    public function getLocationIdentifier(): array
    {
        return $this->LocationIdentifier;
    }

    public function removeLocationIdentifier(LocationIdentifier $locationIdentifier): static
    {
        $this->LocationIdentifier = array_values(array_filter(
            $this->LocationIdentifier,
            static fn ($item): bool => $item !== $locationIdentifier,
        ));

        return $this;
    }

    public function addLocationName(string $locationName): static
    {
        $this->LocationName[] = $locationName;

        return $this;
    }

    public function getLocationName(): array
    {
        return $this->LocationName;
    }

    public function removeLocationName(string $locationName): static
    {
        $this->LocationName = array_values(array_filter(
            $this->LocationName,
            static fn ($item): bool => $item !== $locationName,
        ));

        return $this;
    }

    public function addStockQuantityCoded(StockQuantityCoded $stockQuantityCoded): static
    {
        $this->StockQuantityCoded[] = $stockQuantityCoded;

        return $this;
    }

    public function getStockQuantityCoded(): array
    {
        return $this->StockQuantityCoded;
    }

    public function removeStockQuantityCoded(StockQuantityCoded $stockQuantityCoded): static
    {
        $this->StockQuantityCoded = array_values(array_filter(
            $this->StockQuantityCoded,
            static fn ($item): bool => $item !== $stockQuantityCoded,
        ));

        return $this;
    }

    public function setOnHand(int $onHand): static
    {
        $this->OnHand = $onHand;

        return $this;
    }

    public function getOnHand(): ?int
    {
        return $this->OnHand;
    }

    public function setProximity(CodeList215 $proximity): static
    {
        $this->Proximity = $proximity;

        return $this;
    }

    public function getProximity(): ?CodeList215
    {
        return $this->Proximity;
    }

    public function setReserved(int $reserved): static
    {
        $this->Reserved = $reserved;

        return $this;
    }

    public function getReserved(): ?int
    {
        return $this->Reserved;
    }

    public function setOnOrder(int $onOrder): static
    {
        $this->OnOrder = $onOrder;

        return $this;
    }

    public function getOnOrder(): ?int
    {
        return $this->OnOrder;
    }

    public function setCBO(int $cBO): static
    {
        $this->CBO = $cBO;

        return $this;
    }

    public function getCBO(): ?int
    {
        return $this->CBO;
    }

    public function addOnOrderDetail(OnOrderDetail $onOrderDetail): static
    {
        $this->OnOrderDetail[] = $onOrderDetail;

        return $this;
    }

    public function getOnOrderDetail(): array
    {
        return $this->OnOrderDetail;
    }

    public function removeOnOrderDetail(OnOrderDetail $onOrderDetail): static
    {
        $this->OnOrderDetail = array_values(array_filter(
            $this->OnOrderDetail,
            static fn ($item): bool => $item !== $onOrderDetail,
        ));

        return $this;
    }

    public function addVelocity(Velocity $velocity): static
    {
        $this->Velocity[] = $velocity;

        return $this;
    }

    public function getVelocity(): array
    {
        return $this->Velocity;
    }

    public function removeVelocity(Velocity $velocity): static
    {
        $this->Velocity = array_values(array_filter(
            $this->Velocity,
            static fn ($item): bool => $item !== $velocity,
        ));

        return $this;
    }
}
