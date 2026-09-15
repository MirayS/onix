<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class Market
{
    private ?Territory $Territory = null;

    private array $SalesRestriction = [];

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
}
