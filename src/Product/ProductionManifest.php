<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ProductionManifest
{
    private array $ProductIdentifier = [];

    private ?CoverManifest $CoverManifest = null;

    private ?BodyManifest $BodyManifest = null;

    private array $InsertManifest = [];

    private array $SupplementManifest = [];

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

    public function setCoverManifest(CoverManifest $coverManifest): static
    {
        $this->CoverManifest = $coverManifest;

        return $this;
    }

    public function getCoverManifest(): ?CoverManifest
    {
        return $this->CoverManifest;
    }

    public function setBodyManifest(BodyManifest $bodyManifest): static
    {
        $this->BodyManifest = $bodyManifest;

        return $this;
    }

    public function getBodyManifest(): ?BodyManifest
    {
        return $this->BodyManifest;
    }

    public function addInsertManifest(InsertManifest $insertManifest): static
    {
        $this->InsertManifest[] = $insertManifest;

        return $this;
    }

    public function getInsertManifest(): array
    {
        return $this->InsertManifest;
    }

    public function removeInsertManifest(InsertManifest $insertManifest): static
    {
        $this->InsertManifest = array_values(array_filter(
            $this->InsertManifest,
            static fn ($item): bool => $item !== $insertManifest,
        ));

        return $this;
    }

    public function addSupplementManifest(SupplementManifest $supplementManifest): static
    {
        $this->SupplementManifest[] = $supplementManifest;

        return $this;
    }

    public function getSupplementManifest(): array
    {
        return $this->SupplementManifest;
    }

    public function removeSupplementManifest(SupplementManifest $supplementManifest): static
    {
        $this->SupplementManifest = array_values(array_filter(
            $this->SupplementManifest,
            static fn ($item): bool => $item !== $supplementManifest,
        ));

        return $this;
    }
}
