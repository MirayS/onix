<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList150;
use MirayS\Onix\CodeList\CodeList175;
use MirayS\Onix\CodeList\CodeList80;
use MirayS\Onix\CodeList\CodeList81;
use MirayS\Onix\CodeList\CodeList91;

class ProductPart
{
    private ?bool $PrimaryPart = null;

    private array $ProductIdentifier = [];

    private ?CodeList150 $ProductForm = null;

    private array $ProductFormDetail = [];

    private array $ProductFormFeature = [];

    private ?CodeList80 $ProductPackaging = null;

    private array $ProductFormDescription = [];

    private array $ProductContentType = [];

    private array $Measure = [];

    private ?int $NumberOfItemsOfThisForm = null;

    private ?int $NumberOfCopies = null;

    private ?CodeList91 $CountryOfManufacture = null;

    public function setPrimaryPart(bool $primaryPart): static
    {
        $this->PrimaryPart = $primaryPart;

        return $this;
    }

    public function getPrimaryPart(): ?bool
    {
        return $this->PrimaryPart;
    }

    public function hasPrimaryPart(): bool
    {
        return $this->PrimaryPart === true;
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

    public function addProductFormFeature(ProductFormFeature $productFormFeature): static
    {
        $this->ProductFormFeature[] = $productFormFeature;

        return $this;
    }

    public function getProductFormFeature(): array
    {
        return $this->ProductFormFeature;
    }

    public function removeProductFormFeature(ProductFormFeature $productFormFeature): static
    {
        $this->ProductFormFeature = array_values(array_filter(
            $this->ProductFormFeature,
            static fn ($item): bool => $item !== $productFormFeature,
        ));

        return $this;
    }

    public function setProductPackaging(CodeList80 $productPackaging): static
    {
        $this->ProductPackaging = $productPackaging;

        return $this;
    }

    public function getProductPackaging(): ?CodeList80
    {
        return $this->ProductPackaging;
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

    public function addProductContentType(CodeList81 $productContentType): static
    {
        $this->ProductContentType[] = $productContentType;

        return $this;
    }

    public function getProductContentType(): array
    {
        return $this->ProductContentType;
    }

    public function removeProductContentType(CodeList81 $productContentType): static
    {
        $this->ProductContentType = array_values(array_filter(
            $this->ProductContentType,
            static fn ($item): bool => $item !== $productContentType,
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

    public function setNumberOfItemsOfThisForm(int $numberOfItemsOfThisForm): static
    {
        $this->NumberOfItemsOfThisForm = $numberOfItemsOfThisForm;

        return $this;
    }

    public function getNumberOfItemsOfThisForm(): ?int
    {
        return $this->NumberOfItemsOfThisForm;
    }

    public function setNumberOfCopies(int $numberOfCopies): static
    {
        $this->NumberOfCopies = $numberOfCopies;

        return $this;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->NumberOfCopies;
    }

    public function setCountryOfManufacture(CodeList91 $countryOfManufacture): static
    {
        $this->CountryOfManufacture = $countryOfManufacture;

        return $this;
    }

    public function getCountryOfManufacture(): ?CodeList91
    {
        return $this->CountryOfManufacture;
    }
}
