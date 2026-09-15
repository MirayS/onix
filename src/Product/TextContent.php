<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList153;
use MirayS\Onix\CodeList\CodeList154;
use MirayS\Onix\Text;

class TextContent
{
    private ?int $SequenceNumber = null;

    private ?CodeList153 $TextType = null;

    private array $ContentAudience = [];

    private ?Territory $Territory = null;

    private array $Text = [];

    private ?ReviewRating $ReviewRating = null;

    private array $TextAuthor = [];

    private ?string $TextSourceCorporate = null;

    private array $TextSourceDescription = [];

    private array $TextSource = [];

    private array $SourceTitle = [];

    private array $TextSourceLink = [];

    private array $EpubUsageConstraint = [];

    private array $ContentDate = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function setTextType(CodeList153 $textType): static
    {
        $this->TextType = $textType;

        return $this;
    }

    public function getTextType(): ?CodeList153
    {
        return $this->TextType;
    }

    public function addContentAudience(CodeList154 $contentAudience): static
    {
        $this->ContentAudience[] = $contentAudience;

        return $this;
    }

    public function getContentAudience(): array
    {
        return $this->ContentAudience;
    }

    public function removeContentAudience(CodeList154 $contentAudience): static
    {
        $this->ContentAudience = array_values(array_filter(
            $this->ContentAudience,
            static fn ($item): bool => $item !== $contentAudience,
        ));

        return $this;
    }

    public function setTerritory(Territory $territory): static
    {
        $this->Territory = $territory;

        return $this;
    }

    public function getTerritory(): ?Territory
    {
        return $this->Territory;
    }

    public function addText(Text $text): static
    {
        $this->Text[] = $text;

        return $this;
    }

    public function getText(): array
    {
        return $this->Text;
    }

    public function removeText(Text $text): static
    {
        $this->Text = array_values(array_filter(
            $this->Text,
            static fn ($item): bool => $item !== $text,
        ));

        return $this;
    }

    public function setReviewRating(ReviewRating $reviewRating): static
    {
        $this->ReviewRating = $reviewRating;

        return $this;
    }

    public function getReviewRating(): ?ReviewRating
    {
        return $this->ReviewRating;
    }

    public function addTextAuthor(string $textAuthor): static
    {
        $this->TextAuthor[] = $textAuthor;

        return $this;
    }

    public function getTextAuthor(): array
    {
        return $this->TextAuthor;
    }

    public function removeTextAuthor(string $textAuthor): static
    {
        $this->TextAuthor = array_values(array_filter(
            $this->TextAuthor,
            static fn ($item): bool => $item !== $textAuthor,
        ));

        return $this;
    }

    public function setTextSourceCorporate(string $textSourceCorporate): static
    {
        $this->TextSourceCorporate = $textSourceCorporate;

        return $this;
    }

    public function getTextSourceCorporate(): ?string
    {
        return $this->TextSourceCorporate;
    }

    public function addTextSourceDescription(Text $textSourceDescription): static
    {
        $this->TextSourceDescription[] = $textSourceDescription;

        return $this;
    }

    public function getTextSourceDescription(): array
    {
        return $this->TextSourceDescription;
    }

    public function removeTextSourceDescription(Text $textSourceDescription): static
    {
        $this->TextSourceDescription = array_values(array_filter(
            $this->TextSourceDescription,
            static fn ($item): bool => $item !== $textSourceDescription,
        ));

        return $this;
    }

    public function addTextSource(TextSource $textSource): static
    {
        $this->TextSource[] = $textSource;

        return $this;
    }

    public function getTextSource(): array
    {
        return $this->TextSource;
    }

    public function removeTextSource(TextSource $textSource): static
    {
        $this->TextSource = array_values(array_filter(
            $this->TextSource,
            static fn ($item): bool => $item !== $textSource,
        ));

        return $this;
    }

    public function addSourceTitle(string $sourceTitle): static
    {
        $this->SourceTitle[] = $sourceTitle;

        return $this;
    }

    public function getSourceTitle(): array
    {
        return $this->SourceTitle;
    }

    public function removeSourceTitle(string $sourceTitle): static
    {
        $this->SourceTitle = array_values(array_filter(
            $this->SourceTitle,
            static fn ($item): bool => $item !== $sourceTitle,
        ));

        return $this;
    }

    public function addTextSourceLink(string $textSourceLink): static
    {
        $this->TextSourceLink[] = $textSourceLink;

        return $this;
    }

    public function getTextSourceLink(): array
    {
        return $this->TextSourceLink;
    }

    public function removeTextSourceLink(string $textSourceLink): static
    {
        $this->TextSourceLink = array_values(array_filter(
            $this->TextSourceLink,
            static fn ($item): bool => $item !== $textSourceLink,
        ));

        return $this;
    }

    public function addEpubUsageConstraint(EpubUsageConstraint $epubUsageConstraint): static
    {
        $this->EpubUsageConstraint[] = $epubUsageConstraint;

        return $this;
    }

    public function getEpubUsageConstraint(): array
    {
        return $this->EpubUsageConstraint;
    }

    public function removeEpubUsageConstraint(EpubUsageConstraint $epubUsageConstraint): static
    {
        $this->EpubUsageConstraint = array_values(array_filter(
            $this->EpubUsageConstraint,
            static fn ($item): bool => $item !== $epubUsageConstraint,
        ));

        return $this;
    }

    public function addContentDate(ContentDate $contentDate): static
    {
        $this->ContentDate[] = $contentDate;

        return $this;
    }

    public function getContentDate(): array
    {
        return $this->ContentDate;
    }

    public function removeContentDate(ContentDate $contentDate): static
    {
        $this->ContentDate = array_values(array_filter(
            $this->ContentDate,
            static fn ($item): bool => $item !== $contentDate,
        ));

        return $this;
    }
}
