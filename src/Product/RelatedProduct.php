<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList150;
use MirayS\Onix\CodeList\CodeList175;
use MirayS\Onix\CodeList\CodeList51;

class RelatedProduct
{
    private array $ProductRelationCode = [];

    private array $ProductIdentifier = [];

    private ?CodeList150 $ProductForm = null;

    private array $ProductFormDetail = [];

    public function addProductRelationCode(CodeList51 $productRelationCode): static
    {
        $this->ProductRelationCode[] = $productRelationCode;

        return $this;
    }

    public function getProductRelationCode(): array
    {
        return $this->ProductRelationCode;
    }

    public function removeProductRelationCode(CodeList51 $productRelationCode): static
    {
        $this->ProductRelationCode = array_values(array_filter(
            $this->ProductRelationCode,
            static fn ($item): bool => $item !== $productRelationCode,
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
}
