<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList149;
use MirayS\Onix\Support\TitleElementShortcuts;

class TitleElement
{
    use TitleElementShortcuts;

    private ?int $SequenceNumber = null;

    private ?CodeList149 $TitleElementLevel = null;

    private ?string $PartNumber = null;

    private ?string $YearOfAnnual = null;

    private ?string $TitlePrefix = null;

    private ?bool $NoPrefix = null;

    private ?string $TitleWithoutPrefix = null;

    private ?string $TitleText = null;

    private ?string $Subtitle = null;

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function setTitleElementLevel(CodeList149 $titleElementLevel): static
    {
        $this->TitleElementLevel = $titleElementLevel;

        return $this;
    }

    public function getTitleElementLevel(): ?CodeList149
    {
        return $this->TitleElementLevel;
    }

    public function setPartNumber(string $partNumber): static
    {
        $this->PartNumber = $partNumber;

        return $this;
    }

    public function getPartNumber(): ?string
    {
        return $this->PartNumber;
    }

    public function setYearOfAnnual(string $yearOfAnnual): static
    {
        $this->YearOfAnnual = $yearOfAnnual;

        return $this;
    }

    public function getYearOfAnnual(): ?string
    {
        return $this->YearOfAnnual;
    }

    public function setTitlePrefix(string $titlePrefix): static
    {
        $this->TitlePrefix = $titlePrefix;

        return $this;
    }

    public function getTitlePrefix(): ?string
    {
        return $this->TitlePrefix;
    }

    public function setNoPrefix(bool $noPrefix): static
    {
        $this->NoPrefix = $noPrefix;

        return $this;
    }

    public function getNoPrefix(): ?bool
    {
        return $this->NoPrefix;
    }

    public function hasNoPrefix(): bool
    {
        return $this->NoPrefix === true;
    }

    public function setTitleWithoutPrefix(string $titleWithoutPrefix): static
    {
        $this->TitleWithoutPrefix = $titleWithoutPrefix;

        return $this;
    }

    public function getTitleWithoutPrefix(): ?string
    {
        return $this->TitleWithoutPrefix;
    }

    public function setTitleText(string $titleText): static
    {
        $this->TitleText = $titleText;

        return $this;
    }

    public function getTitleText(): ?string
    {
        return $this->TitleText;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->Subtitle = $subtitle;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->Subtitle;
    }
}
