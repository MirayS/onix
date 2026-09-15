<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList150;
use MirayS\Onix\CodeList\CodeList175;

class SupplementManifest
{
    private ?int $SequenceNumber = null;

    private array $SalesOutlet = [];

    private array $ProductIdentifier = [];

    private ?CodeList150 $ProductForm = null;

    private array $ProductFormDetail = [];

    private array $ProductFormDescription = [];

    private array $Measure = [];

    private ?CoverManifest $CoverManifest = null;

    private ?BodyManifest $BodyManifest = null;

    private array $InsertManifest = [];

    private ?bool $NoSupplement = null;

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function addSalesOutlet(SalesOutlet $salesOutlet): static
    {
        $this->SalesOutlet[] = $salesOutlet;

        return $this;
    }

    public function getSalesOutlet(): array
    {
        return $this->SalesOutlet;
    }

    public function removeSalesOutlet(SalesOutlet $salesOutlet): static
    {
        $this->SalesOutlet = array_values(array_filter(
            $this->SalesOutlet,
            static fn ($item): bool => $item !== $salesOutlet,
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

    public function setProductForm(CodeList150 $productForm): static
    {
        $this->ProductForm = $productForm;

        return $this;
    }

    public function getProductForm(): ?CodeList150
    {
        return $this->ProductForm;
    }

    public function addProductFormDetail(CodeList175 $productFormDetail): static
    {
        $this->ProductFormDetail[] = $productFormDetail;

        return $this;
    }

    public function getProductFormDetail(): array
    {
        return $this->ProductFormDetail;
    }

    public function removeProductFormDetail(CodeList175 $productFormDetail): static
    {
        $this->ProductFormDetail = array_values(array_filter(
            $this->ProductFormDetail,
            static fn ($item): bool => $item !== $productFormDetail,
        ));

        return $this;
    }

    public function addProductFormDescription(string $productFormDescription): static
    {
        $this->ProductFormDescription[] = $productFormDescription;

        return $this;
    }

    public function getProductFormDescription(): array
    {
        return $this->ProductFormDescription;
    }

    public function removeProductFormDescription(string $productFormDescription): static
    {
        $this->ProductFormDescription = array_values(array_filter(
            $this->ProductFormDescription,
            static fn ($item): bool => $item !== $productFormDescription,
        ));

        return $this;
    }

    public function addMeasure(Measure $measure): static
    {
        $this->Measure[] = $measure;

        return $this;
    }

    public function getMeasure(): array
    {
        return $this->Measure;
    }

    public function removeMeasure(Measure $measure): static
    {
        $this->Measure = array_values(array_filter(
            $this->Measure,
            static fn ($item): bool => $item !== $measure,
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

    public function setNoSupplement(bool $noSupplement): static
    {
        $this->NoSupplement = $noSupplement;

        return $this;
    }

    public function getNoSupplement(): ?bool
    {
        return $this->NoSupplement;
    }

    public function hasNoSupplement(): bool
    {
        return $this->NoSupplement === true;
    }
}
