<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ProductSupply
{
    private ?string $MarketReference = null;

    private array $Market = [];

    private ?MarketPublishingDetail $MarketPublishingDetail = null;

    private array $SupplyDetail = [];

    public function setMarketReference(string $marketReference): static
    {
        $this->MarketReference = $marketReference;

        return $this;
    }

    public function getMarketReference(): ?string
    {
        return $this->MarketReference;
    }

    public function addMarket(Market $market): static
    {
        $this->Market[] = $market;

        return $this;
    }

    public function getMarket(): array
    {
        return $this->Market;
    }

    public function removeMarket(Market $market): static
    {
        $this->Market = array_values(array_filter(
            $this->Market,
            static fn ($item): bool => $item !== $market,
        ));

        return $this;
    }

    public function setMarketPublishingDetail(MarketPublishingDetail $marketPublishingDetail): static
    {
        $this->MarketPublishingDetail = $marketPublishingDetail;

        return $this;
    }

    public function getMarketPublishingDetail(): ?MarketPublishingDetail
    {
        return $this->MarketPublishingDetail;
    }

    public function addSupplyDetail(SupplyDetail $supplyDetail): static
    {
        $this->SupplyDetail[] = $supplyDetail;

        return $this;
    }

    public function getSupplyDetail(): array
    {
        return $this->SupplyDetail;
    }

    public function removeSupplyDetail(SupplyDetail $supplyDetail): static
    {
        $this->SupplyDetail = array_values(array_filter(
            $this->SupplyDetail,
            static fn ($item): bool => $item !== $supplyDetail,
        ));

        return $this;
    }
}
