<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList148;
use MirayS\Onix\CodeList\CodeList259;
use MirayS\Onix\Text;

class Collection
{
    private ?CodeList148 $CollectionType = null;

    private ?CodeList259 $CollectionFrequency = null;

    private ?string $SourceName = null;

    private array $CollectionIdentifier = [];

    private array $CollectionSequence = [];

    private array $TitleDetail = [];

    private array $Contributor = [];

    private array $ContributorStatement = [];

    private ?bool $NoContributor = null;

    public function setCollectionType(CodeList148 $collectionType): static
    {
        $this->CollectionType = $collectionType;

        return $this;
    }

    public function getCollectionType(): ?CodeList148
    {
        return $this->CollectionType;
    }

    public function setCollectionFrequency(CodeList259 $collectionFrequency): static
    {
        $this->CollectionFrequency = $collectionFrequency;

        return $this;
    }

    public function getCollectionFrequency(): ?CodeList259
    {
        return $this->CollectionFrequency;
    }

    public function setSourceName(string $sourceName): static
    {
        $this->SourceName = $sourceName;

        return $this;
    }

    public function getSourceName(): ?string
    {
        return $this->SourceName;
    }

    public function addCollectionIdentifier(CollectionIdentifier $collectionIdentifier): static
    {
        $this->CollectionIdentifier[] = $collectionIdentifier;

        return $this;
    }

    public function getCollectionIdentifier(): array
    {
        return $this->CollectionIdentifier;
    }

    public function removeCollectionIdentifier(CollectionIdentifier $collectionIdentifier): static
    {
        $this->CollectionIdentifier = array_values(array_filter(
            $this->CollectionIdentifier,
            static fn ($item): bool => $item !== $collectionIdentifier,
        ));

        return $this;
    }

    public function addCollectionSequence(CollectionSequence $collectionSequence): static
    {
        $this->CollectionSequence[] = $collectionSequence;

        return $this;
    }

    public function getCollectionSequence(): array
    {
        return $this->CollectionSequence;
    }

    public function removeCollectionSequence(CollectionSequence $collectionSequence): static
    {
        $this->CollectionSequence = array_values(array_filter(
            $this->CollectionSequence,
            static fn ($item): bool => $item !== $collectionSequence,
        ));

        return $this;
    }

    public function addTitleDetail(TitleDetail $titleDetail): static
    {
        $this->TitleDetail[] = $titleDetail;

        return $this;
    }

    public function getTitleDetail(): array
    {
        return $this->TitleDetail;
    }

    public function removeTitleDetail(TitleDetail $titleDetail): static
    {
        $this->TitleDetail = array_values(array_filter(
            $this->TitleDetail,
            static fn ($item): bool => $item !== $titleDetail,
        ));

        return $this;
    }

    public function addContributor(Contributor $contributor): static
    {
        $this->Contributor[] = $contributor;

        return $this;
    }

    public function getContributor(): array
    {
        return $this->Contributor;
    }

    public function removeContributor(Contributor $contributor): static
    {
        $this->Contributor = array_values(array_filter(
            $this->Contributor,
            static fn ($item): bool => $item !== $contributor,
        ));

        return $this;
    }

    public function addContributorStatement(Text $contributorStatement): static
    {
        $this->ContributorStatement[] = $contributorStatement;

        return $this;
    }

    public function getContributorStatement(): array
    {
        return $this->ContributorStatement;
    }

    public function removeContributorStatement(Text $contributorStatement): static
    {
        $this->ContributorStatement = array_values(array_filter(
            $this->ContributorStatement,
            static fn ($item): bool => $item !== $contributorStatement,
        ));

        return $this;
    }

    public function setNoContributor(bool $noContributor): static
    {
        $this->NoContributor = $noContributor;

        return $this;
    }

    public function getNoContributor(): ?bool
    {
        return $this->NoContributor;
    }

    public function hasNoContributor(): bool
    {
        return $this->NoContributor === true;
    }
}
