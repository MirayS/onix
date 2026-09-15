<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

use MirayS\Onix\Product\Product;
use MirayS\Onix\Support\MessageShortcuts;

class Message
{
    use MessageShortcuts;

    private ?Header $Header = null;

    private ?bool $NoProduct = null;

    private array $Product = [];

    public function setHeader(Header $header): static
    {
        $this->Header = $header;

        return $this;
    }

    public function getHeader(): ?Header
    {
        return $this->Header;
    }

    public function setNoProduct(bool $noProduct): static
    {
        $this->NoProduct = $noProduct;

        return $this;
    }

    public function getNoProduct(): ?bool
    {
        return $this->NoProduct;
    }

    public function hasNoProduct(): bool
    {
        return $this->NoProduct === true;
    }

    public function addProduct(Product $product): static
    {
        $this->Product[] = $product;

        return $this;
    }

    public function getProduct(): array
    {
        return $this->Product;
    }

    public function removeProduct(Product $product): static
    {
        $this->Product = array_values(array_filter(
            $this->Product,
            static fn ($item): bool => $item !== $product,
        ));

        return $this;
    }
}
