<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList147;

class EpubUsageLimit
{
    private ?string $Quantity = null;

    private ?CodeList147 $EpubUsageUnit = null;

    public function setQuantity(string $quantity): static
    {
        $this->Quantity = $quantity;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setEpubUsageUnit(CodeList147 $epubUsageUnit): static
    {
        $this->EpubUsageUnit = $epubUsageUnit;

        return $this;
    }

    public function getEpubUsageUnit(): ?CodeList147
    {
        return $this->EpubUsageUnit;
    }
}
