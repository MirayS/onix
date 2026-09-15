<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class SpecificationBundleName
{
    private ?string $SpecificationBundleNameTypeName = null;

    private ?string $SpecificationBundleNameValue = null;

    public function setSpecificationBundleNameTypeName(string $specificationBundleNameTypeName): static
    {
        $this->SpecificationBundleNameTypeName = $specificationBundleNameTypeName;

        return $this;
    }

    public function getSpecificationBundleNameTypeName(): ?string
    {
        return $this->SpecificationBundleNameTypeName;
    }

    public function setSpecificationBundleNameValue(string $specificationBundleNameValue): static
    {
        $this->SpecificationBundleNameValue = $specificationBundleNameValue;

        return $this;
    }

    public function getSpecificationBundleNameValue(): ?string
    {
        return $this->SpecificationBundleNameValue;
    }
}
