<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class RelatedMaterial
{
    private array $RelatedWork = [];

    private array $RelatedProduct = [];

    public function addRelatedWork(RelatedWork $relatedWork): static
    {
        $this->RelatedWork[] = $relatedWork;

        return $this;
    }

    public function getRelatedWork(): array
    {
        return $this->RelatedWork;
    }

    public function removeRelatedWork(RelatedWork $relatedWork): static
    {
        $this->RelatedWork = array_values(array_filter(
            $this->RelatedWork,
            static fn ($item): bool => $item !== $relatedWork,
        ));

        return $this;
    }

    public function addRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->RelatedProduct[] = $relatedProduct;

        return $this;
    }

    public function getRelatedProduct(): array
    {
        return $this->RelatedProduct;
    }

    public function removeRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->RelatedProduct = array_values(array_filter(
            $this->RelatedProduct,
            static fn ($item): bool => $item !== $relatedProduct,
        ));

        return $this;
    }
}
