<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList248;

class BodyManifest
{
    private array $SpecificationBundleName = [];

    private array $SpecificationDetail = [];

    private array $SpecificationFeature = [];

    private array $SpecificationDescription = [];

    private array $BodyResource = [];

    public function addSpecificationBundleName(SpecificationBundleName $specificationBundleName): static
    {
        $this->SpecificationBundleName[] = $specificationBundleName;

        return $this;
    }

    public function getSpecificationBundleName(): array
    {
        return $this->SpecificationBundleName;
    }

    public function removeSpecificationBundleName(SpecificationBundleName $specificationBundleName): static
    {
        $this->SpecificationBundleName = array_values(array_filter(
            $this->SpecificationBundleName,
            static fn ($item): bool => $item !== $specificationBundleName,
        ));

        return $this;
    }

    public function addSpecificationDetail(CodeList248 $specificationDetail): static
    {
        $this->SpecificationDetail[] = $specificationDetail;

        return $this;
    }

    public function getSpecificationDetail(): array
    {
        return $this->SpecificationDetail;
    }

    public function removeSpecificationDetail(CodeList248 $specificationDetail): static
    {
        $this->SpecificationDetail = array_values(array_filter(
            $this->SpecificationDetail,
            static fn ($item): bool => $item !== $specificationDetail,
        ));

        return $this;
    }

    public function addSpecificationFeature(SpecificationFeature $specificationFeature): static
    {
        $this->SpecificationFeature[] = $specificationFeature;

        return $this;
    }

    public function getSpecificationFeature(): array
    {
        return $this->SpecificationFeature;
    }

    public function removeSpecificationFeature(SpecificationFeature $specificationFeature): static
    {
        $this->SpecificationFeature = array_values(array_filter(
            $this->SpecificationFeature,
            static fn ($item): bool => $item !== $specificationFeature,
        ));

        return $this;
    }

    public function addSpecificationDescription(string $specificationDescription): static
    {
        $this->SpecificationDescription[] = $specificationDescription;

        return $this;
    }

    public function getSpecificationDescription(): array
    {
        return $this->SpecificationDescription;
    }

    public function removeSpecificationDescription(string $specificationDescription): static
    {
        $this->SpecificationDescription = array_values(array_filter(
            $this->SpecificationDescription,
            static fn ($item): bool => $item !== $specificationDescription,
        ));

        return $this;
    }

    public function addBodyResource(BodyResource $bodyResource): static
    {
        $this->BodyResource[] = $bodyResource;

        return $this;
    }

    public function getBodyResource(): array
    {
        return $this->BodyResource;
    }

    public function removeBodyResource(BodyResource $bodyResource): static
    {
        $this->BodyResource = array_values(array_filter(
            $this->BodyResource,
            static fn ($item): bool => $item !== $bodyResource,
        ));

        return $this;
    }
}
