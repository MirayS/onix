<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList46;

class SalesRights
{
    private ?CodeList46 $SalesRightsType = null;

    private ?Territory $Territory = null;

    private array $SalesRestriction = [];

    private array $ProductIdentifier = [];

    private array $PublisherName = [];

    private array $PublisherNameInverted = [];

    public function setSalesRightsType(CodeList46 $salesRightsType): static
    {
        $this->SalesRightsType = $salesRightsType;

        return $this;
    }

    public function getSalesRightsType(): ?CodeList46
    {
        return $this->SalesRightsType;
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

    public function addSalesRestriction(SalesRestriction $salesRestriction): static
    {
        $this->SalesRestriction[] = $salesRestriction;

        return $this;
    }

    public function getSalesRestriction(): array
    {
        return $this->SalesRestriction;
    }

    public function removeSalesRestriction(SalesRestriction $salesRestriction): static
    {
        $this->SalesRestriction = array_values(array_filter(
            $this->SalesRestriction,
            static fn ($item): bool => $item !== $salesRestriction,
        ));

        return $this;
    }

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

    public function addPublisherName(string $publisherName): static
    {
        $this->PublisherName[] = $publisherName;

        return $this;
    }

    public function getPublisherName(): array
    {
        return $this->PublisherName;
    }

    public function removePublisherName(string $publisherName): static
    {
        $this->PublisherName = array_values(array_filter(
            $this->PublisherName,
            static fn ($item): bool => $item !== $publisherName,
        ));

        return $this;
    }

    public function addPublisherNameInverted(string $publisherNameInverted): static
    {
        $this->PublisherNameInverted[] = $publisherNameInverted;

        return $this;
    }

    public function getPublisherNameInverted(): array
    {
        return $this->PublisherNameInverted;
    }

    public function removePublisherNameInverted(string $publisherNameInverted): static
    {
        $this->PublisherNameInverted = array_values(array_filter(
            $this->PublisherNameInverted,
            static fn ($item): bool => $item !== $publisherNameInverted,
        ));

        return $this;
    }
}
