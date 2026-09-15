<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList15;
use MirayS\Onix\Text;

class TitleDetail
{
    private ?CodeList15 $TitleType = null;

    private array $TitleElement = [];

    private ?Text $TitleStatement = null;

    public function setTitleType(CodeList15 $titleType): static
    {
        $this->TitleType = $titleType;

        return $this;
    }

    public function getTitleType(): ?CodeList15
    {
        return $this->TitleType;
    }

    public function addTitleElement(TitleElement $titleElement): static
    {
        $this->TitleElement[] = $titleElement;

        return $this;
    }

    public function getTitleElement(): array
    {
        return $this->TitleElement;
    }

    public function removeTitleElement(TitleElement $titleElement): static
    {
        $this->TitleElement = array_values(array_filter(
            $this->TitleElement,
            static fn ($item): bool => $item !== $titleElement,
        ));

        return $this;
    }

    public function setTitleStatement(Text $titleStatement): static
    {
        $this->TitleStatement = $titleStatement;

        return $this;
    }

    public function getTitleStatement(): ?Text
    {
        return $this->TitleStatement;
    }
}
