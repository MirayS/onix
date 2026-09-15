<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ProductionDetail
{
    private array $ProductionManifest = [];

    public function addProductionManifest(ProductionManifest $productionManifest): static
    {
        $this->ProductionManifest[] = $productionManifest;

        return $this;
    }

    public function getProductionManifest(): array
    {
        return $this->ProductionManifest;
    }

    public function removeProductionManifest(ProductionManifest $productionManifest): static
    {
        $this->ProductionManifest = array_values(array_filter(
            $this->ProductionManifest,
            static fn ($item): bool => $item !== $productionManifest,
        ));

        return $this;
    }
}
