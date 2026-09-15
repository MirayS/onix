<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class BatchBonus
{
    private ?int $BatchQuantity = null;

    private ?int $FreeQuantity = null;

    public function setBatchQuantity(int $batchQuantity): static
    {
        $this->BatchQuantity = $batchQuantity;

        return $this;
    }

    public function getBatchQuantity(): ?int
    {
        return $this->BatchQuantity;
    }

    public function setFreeQuantity(int $freeQuantity): static
    {
        $this->FreeQuantity = $freeQuantity;

        return $this;
    }

    public function getFreeQuantity(): ?int
    {
        return $this->FreeQuantity;
    }
}
