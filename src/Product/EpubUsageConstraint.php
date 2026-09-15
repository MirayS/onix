<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList145;
use MirayS\Onix\CodeList\CodeList146;

class EpubUsageConstraint
{
    private ?CodeList145 $EpubUsageType = null;

    private ?CodeList146 $EpubUsageStatus = null;

    private array $EpubUsageLimit = [];

    public function setEpubUsageType(CodeList145 $epubUsageType): static
    {
        $this->EpubUsageType = $epubUsageType;

        return $this;
    }

    public function getEpubUsageType(): ?CodeList145
    {
        return $this->EpubUsageType;
    }

    public function setEpubUsageStatus(CodeList146 $epubUsageStatus): static
    {
        $this->EpubUsageStatus = $epubUsageStatus;

        return $this;
    }

    public function getEpubUsageStatus(): ?CodeList146
    {
        return $this->EpubUsageStatus;
    }

    public function addEpubUsageLimit(EpubUsageLimit $epubUsageLimit): static
    {
        $this->EpubUsageLimit[] = $epubUsageLimit;

        return $this;
    }

    public function getEpubUsageLimit(): array
    {
        return $this->EpubUsageLimit;
    }

    public function removeEpubUsageLimit(EpubUsageLimit $epubUsageLimit): static
    {
        $this->EpubUsageLimit = array_values(array_filter(
            $this->EpubUsageLimit,
            static fn ($item): bool => $item !== $epubUsageLimit,
        ));

        return $this;
    }
}
