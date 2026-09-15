<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList42;

class TextItem
{
    private ?CodeList42 $TextItemType = null;

    private array $TextItemIdentifier = [];

    private array $PageRun = [];

    private ?int $NumberOfPages = null;

    public function setTextItemType(CodeList42 $textItemType): static
    {
        $this->TextItemType = $textItemType;

        return $this;
    }

    public function getTextItemType(): ?CodeList42
    {
        return $this->TextItemType;
    }

    public function addTextItemIdentifier(TextItemIdentifier $textItemIdentifier): static
    {
        $this->TextItemIdentifier[] = $textItemIdentifier;

        return $this;
    }

    public function getTextItemIdentifier(): array
    {
        return $this->TextItemIdentifier;
    }

    public function removeTextItemIdentifier(TextItemIdentifier $textItemIdentifier): static
    {
        $this->TextItemIdentifier = array_values(array_filter(
            $this->TextItemIdentifier,
            static fn ($item): bool => $item !== $textItemIdentifier,
        ));

        return $this;
    }

    public function addPageRun(PageRun $pageRun): static
    {
        $this->PageRun[] = $pageRun;

        return $this;
    }

    public function getPageRun(): array
    {
        return $this->PageRun;
    }

    public function removePageRun(PageRun $pageRun): static
    {
        $this->PageRun = array_values(array_filter(
            $this->PageRun,
            static fn ($item): bool => $item !== $pageRun,
        ));

        return $this;
    }

    public function setNumberOfPages(int $numberOfPages): static
    {
        $this->NumberOfPages = $numberOfPages;

        return $this;
    }

    public function getNumberOfPages(): ?int
    {
        return $this->NumberOfPages;
    }
}
