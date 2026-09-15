<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\Text;

class ContentItem
{
    private ?string $LevelSequenceNumber = null;

    private ?TextItem $TextItem = null;

    private ?AVItem $AVItem = null;

    private array $EpubUsageConstraint = [];

    private ?string $ComponentTypeName = null;

    private ?string $ComponentNumber = null;

    private array $TitleDetail = [];

    private array $Contributor = [];

    private array $ContributorStatement = [];

    private ?bool $NoContributor = null;

    private array $Language = [];

    private array $Subject = [];

    private array $NameAsSubject = [];

    private array $TextContent = [];

    private array $CitedContent = [];

    private array $SupportingResource = [];

    private array $Publisher = [];

    private array $CopyrightStatement = [];

    private array $CopyrightStatementText = [];

    private array $RelatedWork = [];

    private array $RelatedProduct = [];

    public function setLevelSequenceNumber(string $levelSequenceNumber): static
    {
        $this->LevelSequenceNumber = $levelSequenceNumber;

        return $this;
    }

    public function getLevelSequenceNumber(): ?string
    {
        return $this->LevelSequenceNumber;
    }

    public function setTextItem(TextItem $textItem): static
    {
        $this->TextItem = $textItem;

        return $this;
    }

    public function getTextItem(): ?TextItem
    {
        return $this->TextItem;
    }

    public function setAVItem(AVItem $aVItem): static
    {
        $this->AVItem = $aVItem;

        return $this;
    }

    public function getAVItem(): ?AVItem
    {
        return $this->AVItem;
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

    public function setComponentTypeName(string $componentTypeName): static
    {
        $this->ComponentTypeName = $componentTypeName;

        return $this;
    }

    public function getComponentTypeName(): ?string
    {
        return $this->ComponentTypeName;
    }

    public function setComponentNumber(string $componentNumber): static
    {
        $this->ComponentNumber = $componentNumber;

        return $this;
    }

    public function getComponentNumber(): ?string
    {
        return $this->ComponentNumber;
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

    public function addLanguage(Language $language): static
    {
        $this->Language[] = $language;

        return $this;
    }

    public function getLanguage(): array
    {
        return $this->Language;
    }

    public function removeLanguage(Language $language): static
    {
        $this->Language = array_values(array_filter(
            $this->Language,
            static fn ($item): bool => $item !== $language,
        ));

        return $this;
    }

    public function addSubject(Subject $subject): static
    {
        $this->Subject[] = $subject;

        return $this;
    }

    public function getSubject(): array
    {
        return $this->Subject;
    }

    public function removeSubject(Subject $subject): static
    {
        $this->Subject = array_values(array_filter(
            $this->Subject,
            static fn ($item): bool => $item !== $subject,
        ));

        return $this;
    }

    public function addNameAsSubject(NameAsSubject $nameAsSubject): static
    {
        $this->NameAsSubject[] = $nameAsSubject;

        return $this;
    }

    public function getNameAsSubject(): array
    {
        return $this->NameAsSubject;
    }

    public function removeNameAsSubject(NameAsSubject $nameAsSubject): static
    {
        $this->NameAsSubject = array_values(array_filter(
            $this->NameAsSubject,
            static fn ($item): bool => $item !== $nameAsSubject,
        ));

        return $this;
    }

    public function addTextContent(TextContent $textContent): static
    {
        $this->TextContent[] = $textContent;

        return $this;
    }

    public function getTextContent(): array
    {
        return $this->TextContent;
    }

    public function removeTextContent(TextContent $textContent): static
    {
        $this->TextContent = array_values(array_filter(
            $this->TextContent,
            static fn ($item): bool => $item !== $textContent,
        ));

        return $this;
    }

    public function addCitedContent(CitedContent $citedContent): static
    {
        $this->CitedContent[] = $citedContent;

        return $this;
    }

    public function getCitedContent(): array
    {
        return $this->CitedContent;
    }

    public function removeCitedContent(CitedContent $citedContent): static
    {
        $this->CitedContent = array_values(array_filter(
            $this->CitedContent,
            static fn ($item): bool => $item !== $citedContent,
        ));

        return $this;
    }

    public function addSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource[] = $supportingResource;

        return $this;
    }

    public function getSupportingResource(): array
    {
        return $this->SupportingResource;
    }

    public function removeSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource = array_values(array_filter(
            $this->SupportingResource,
            static fn ($item): bool => $item !== $supportingResource,
        ));

        return $this;
    }

    public function addPublisher(Publisher $publisher): static
    {
        $this->Publisher[] = $publisher;

        return $this;
    }

    public function getPublisher(): array
    {
        return $this->Publisher;
    }

    public function removePublisher(Publisher $publisher): static
    {
        $this->Publisher = array_values(array_filter(
            $this->Publisher,
            static fn ($item): bool => $item !== $publisher,
        ));

        return $this;
    }

    public function addCopyrightStatement(CopyrightStatement $copyrightStatement): static
    {
        $this->CopyrightStatement[] = $copyrightStatement;

        return $this;
    }

    public function getCopyrightStatement(): array
    {
        return $this->CopyrightStatement;
    }

    public function removeCopyrightStatement(CopyrightStatement $copyrightStatement): static
    {
        $this->CopyrightStatement = array_values(array_filter(
            $this->CopyrightStatement,
            static fn ($item): bool => $item !== $copyrightStatement,
        ));

        return $this;
    }

    public function addCopyrightStatementText(Text $copyrightStatementText): static
    {
        $this->CopyrightStatementText[] = $copyrightStatementText;

        return $this;
    }

    public function getCopyrightStatementText(): array
    {
        return $this->CopyrightStatementText;
    }

    public function removeCopyrightStatementText(Text $copyrightStatementText): static
    {
        $this->CopyrightStatementText = array_values(array_filter(
            $this->CopyrightStatementText,
            static fn ($item): bool => $item !== $copyrightStatementText,
        ));

        return $this;
    }

    public function addRelatedWork(RelatedWork $relatedWork): static
    {
        $this->RelatedWork[] = $relatedWork;

        return $this;
    }

    public function getRelatedWork(): array
    {
        return $this->RelatedWork;
    }

    public function removeRelatedWork(RelatedWork $relatedWork): static
    {
        $this->RelatedWork = array_values(array_filter(
            $this->RelatedWork,
            static fn ($item): bool => $item !== $relatedWork,
        ));

        return $this;
    }

    public function addRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->RelatedProduct[] = $relatedProduct;

        return $this;
    }

    public function getRelatedProduct(): array
    {
        return $this->RelatedProduct;
    }

    public function removeRelatedProduct(RelatedProduct $relatedProduct): static
    {
        $this->RelatedProduct = array_values(array_filter(
            $this->RelatedProduct,
            static fn ($item): bool => $item !== $relatedProduct,
        ));

        return $this;
    }
}
