<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList154;
use MirayS\Onix\CodeList\CodeList156;
use MirayS\Onix\CodeList\CodeList157;
use MirayS\Onix\Text;

class CitedContent
{
    private ?int $SequenceNumber = null;

    private ?CodeList156 $CitedContentType = null;

    private array $ContentAudience = [];

    private ?Territory $Territory = null;

    private ?CodeList157 $SourceType = null;

    private ?ReviewRating $ReviewRating = null;

    private array $SourceTitle = [];

    private array $ListName = [];

    private ?int $PositionOnList = null;

    private array $CitationNote = [];

    private array $ResourceLink = [];

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

    public function setCitedContentType(CodeList156 $citedContentType): static
    {
        $this->CitedContentType = $citedContentType;

        return $this;
    }

    public function getCitedContentType(): ?CodeList156
    {
        return $this->CitedContentType;
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

    public function setSourceType(CodeList157 $sourceType): static
    {
        $this->SourceType = $sourceType;

        return $this;
    }

    public function getSourceType(): ?CodeList157
    {
        return $this->SourceType;
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

    public function addListName(string $listName): static
    {
        $this->ListName[] = $listName;

        return $this;
    }

    public function getListName(): array
    {
        return $this->ListName;
    }

    public function removeListName(string $listName): static
    {
        $this->ListName = array_values(array_filter(
            $this->ListName,
            static fn ($item): bool => $item !== $listName,
        ));

        return $this;
    }

    public function setPositionOnList(int $positionOnList): static
    {
        $this->PositionOnList = $positionOnList;

        return $this;
    }

    public function getPositionOnList(): ?int
    {
        return $this->PositionOnList;
    }

    public function addCitationNote(Text $citationNote): static
    {
        $this->CitationNote[] = $citationNote;

        return $this;
    }

    public function getCitationNote(): array
    {
        return $this->CitationNote;
    }

    public function removeCitationNote(Text $citationNote): static
    {
        $this->CitationNote = array_values(array_filter(
            $this->CitationNote,
            static fn ($item): bool => $item !== $citationNote,
        ));

        return $this;
    }

    public function addResourceLink(string $resourceLink): static
    {
        $this->ResourceLink[] = $resourceLink;

        return $this;
    }

    public function getResourceLink(): array
    {
        return $this->ResourceLink;
    }

    public function removeResourceLink(string $resourceLink): static
    {
        $this->ResourceLink = array_values(array_filter(
            $this->ResourceLink,
            static fn ($item): bool => $item !== $resourceLink,
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
