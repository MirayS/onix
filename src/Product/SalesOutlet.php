<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class SalesOutlet
{
    private array $SalesOutletIdentifier = [];

    private ?string $SalesOutletName = null;

    public function addSalesOutletIdentifier(SalesOutletIdentifier $salesOutletIdentifier): static
    {
        $this->SalesOutletIdentifier[] = $salesOutletIdentifier;

        return $this;
    }

    public function getSalesOutletIdentifier(): array
    {
        return $this->SalesOutletIdentifier;
    }

    public function removeSalesOutletIdentifier(SalesOutletIdentifier $salesOutletIdentifier): static
    {
        $this->SalesOutletIdentifier = array_values(array_filter(
            $this->SalesOutletIdentifier,
            static fn ($item): bool => $item !== $salesOutletIdentifier,
        ));

        return $this;
    }

    public function setSalesOutletName(string $salesOutletName): static
    {
        $this->SalesOutletName = $salesOutletName;

        return $this;
    }

    public function getSalesOutletName(): ?string
    {
        return $this->SalesOutletName;
    }
}
