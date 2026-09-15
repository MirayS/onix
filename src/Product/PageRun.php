<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class PageRun
{
    private ?string $FirstPageNumber = null;

    private ?string $LastPageNumber = null;

    public function setFirstPageNumber(string $firstPageNumber): static
    {
        $this->FirstPageNumber = $firstPageNumber;

        return $this;
    }

    public function getFirstPageNumber(): ?string
    {
        return $this->FirstPageNumber;
    }

    public function setLastPageNumber(string $lastPageNumber): static
    {
        $this->LastPageNumber = $lastPageNumber;

        return $this;
    }

    public function getLastPageNumber(): ?string
    {
        return $this->LastPageNumber;
    }
}
