<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList12;
use MirayS\Onix\CodeList\CodeList144;
use MirayS\Onix\CodeList\CodeList150;
use MirayS\Onix\CodeList\CodeList152;
use MirayS\Onix\CodeList\CodeList175;
use MirayS\Onix\CodeList\CodeList2;
use MirayS\Onix\CodeList\CodeList21;
use MirayS\Onix\CodeList\CodeList72;
use MirayS\Onix\CodeList\CodeList80;
use MirayS\Onix\CodeList\CodeList81;
use MirayS\Onix\CodeList\CodeList91;
use MirayS\Onix\Date;
use MirayS\Onix\Support\MeasureShortcuts;
use MirayS\Onix\Support\TitleShortcuts;
use MirayS\Onix\Text;

class DescriptiveDetail
{
    use MeasureShortcuts;

    use TitleShortcuts;

    private ?CodeList2 $ProductComposition = null;

    private ?CodeList150 $ProductForm = null;

    private array $ProductFormDetail = [];

    private array $ProductFormFeature = [];

    private ?CodeList80 $ProductPackaging = null;

    private array $ProductFormDescription = [];

    private ?CodeList12 $TradeCategory = null;

    private ?CodeList81 $PrimaryContentType = null;

    private array $ProductContentType = [];

    private array $Measure = [];

    private ?CodeList91 $CountryOfManufacture = null;

    private array $EpubTechnicalProtection = [];

    private array $EpubUsageConstraint = [];

    private array $MapScale = [];

    private array $ProductClassification = [];

    private array $ProductPart = [];

    private array $Collection = [];

    private ?bool $NoCollection = null;

    private array $TitleDetail = [];

    private ?CodeList72 $ThesisType = null;

    private ?string $ThesisPresentedTo = null;

    private ?Date $ThesisYear = null;

    private array $Contributor = [];

    private array $ContributorStatement = [];

    private ?bool $NoContributor = null;

    private array $Event = [];

    private array $EditionType = [];

    private ?int $EditionNumber = null;

    private ?string $EditionVersionNumber = null;

    private array $EditionStatement = [];

    private ?bool $NoEdition = null;

    private ?ReligiousText $ReligiousText = null;

    private array $Language = [];

    private array $Extent = [];

    private ?CodeList152 $Illustrated = null;

    private ?int $NumberOfIllustrations = null;

    private array $IllustrationsNote = [];

    private array $AncillaryContent = [];

    private array $Subject = [];

    private array $NameAsSubject = [];

    private array $Audience = [];

    private array $AudienceRange = [];

    private array $AudienceDescription = [];

    private array $Complexity = [];

    public function setProductComposition(CodeList2 $productComposition): static
    {
        $this->ProductComposition = $productComposition;

        return $this;
    }

    public function getProductComposition(): ?CodeList2
    {
        return $this->ProductComposition;
    }

    public function setProductForm(CodeList150 $productForm): static
    {
        $this->ProductForm = $productForm;

        return $this;
    }

    public function getProductForm(): ?CodeList150
    {
        return $this->ProductForm;
    }

    public function addProductFormDetail(CodeList175 $productFormDetail): static
    {
        $this->ProductFormDetail[] = $productFormDetail;

        return $this;
    }

    public function getProductFormDetail(): array
    {
        return $this->ProductFormDetail;
    }

    public function removeProductFormDetail(CodeList175 $productFormDetail): static
    {
        $this->ProductFormDetail = array_values(array_filter(
            $this->ProductFormDetail,
            static fn ($item): bool => $item !== $productFormDetail,
        ));

        return $this;
    }

    public function addProductFormFeature(ProductFormFeature $productFormFeature): static
    {
        $this->ProductFormFeature[] = $productFormFeature;

        return $this;
    }

    public function getProductFormFeature(): array
    {
        return $this->ProductFormFeature;
    }

    public function removeProductFormFeature(ProductFormFeature $productFormFeature): static
    {
        $this->ProductFormFeature = array_values(array_filter(
            $this->ProductFormFeature,
            static fn ($item): bool => $item !== $productFormFeature,
        ));

        return $this;
    }

    public function setProductPackaging(CodeList80 $productPackaging): static
    {
        $this->ProductPackaging = $productPackaging;

        return $this;
    }

    public function getProductPackaging(): ?CodeList80
    {
        return $this->ProductPackaging;
    }

    public function addProductFormDescription(string $productFormDescription): static
    {
        $this->ProductFormDescription[] = $productFormDescription;

        return $this;
    }

    public function getProductFormDescription(): array
    {
        return $this->ProductFormDescription;
    }

    public function removeProductFormDescription(string $productFormDescription): static
    {
        $this->ProductFormDescription = array_values(array_filter(
            $this->ProductFormDescription,
            static fn ($item): bool => $item !== $productFormDescription,
        ));

        return $this;
    }

    public function setTradeCategory(CodeList12 $tradeCategory): static
    {
        $this->TradeCategory = $tradeCategory;

        return $this;
    }

    public function getTradeCategory(): ?CodeList12
    {
        return $this->TradeCategory;
    }

    public function setPrimaryContentType(CodeList81 $primaryContentType): static
    {
        $this->PrimaryContentType = $primaryContentType;

        return $this;
    }

    public function getPrimaryContentType(): ?CodeList81
    {
        return $this->PrimaryContentType;
    }

    public function addProductContentType(CodeList81 $productContentType): static
    {
        $this->ProductContentType[] = $productContentType;

        return $this;
    }

    public function getProductContentType(): array
    {
        return $this->ProductContentType;
    }

    public function removeProductContentType(CodeList81 $productContentType): static
    {
        $this->ProductContentType = array_values(array_filter(
            $this->ProductContentType,
            static fn ($item): bool => $item !== $productContentType,
        ));

        return $this;
    }

    public function addMeasure(Measure $measure): static
    {
        $this->Measure[] = $measure;

        return $this;
    }

    public function getMeasure(): array
    {
        return $this->Measure;
    }

    public function removeMeasure(Measure $measure): static
    {
        $this->Measure = array_values(array_filter(
            $this->Measure,
            static fn ($item): bool => $item !== $measure,
        ));

        return $this;
    }

    public function setCountryOfManufacture(CodeList91 $countryOfManufacture): static
    {
        $this->CountryOfManufacture = $countryOfManufacture;

        return $this;
    }

    public function getCountryOfManufacture(): ?CodeList91
    {
        return $this->CountryOfManufacture;
    }

    public function addEpubTechnicalProtection(CodeList144 $epubTechnicalProtection): static
    {
        $this->EpubTechnicalProtection[] = $epubTechnicalProtection;

        return $this;
    }

    public function getEpubTechnicalProtection(): array
    {
        return $this->EpubTechnicalProtection;
    }

    public function removeEpubTechnicalProtection(CodeList144 $epubTechnicalProtection): static
    {
        $this->EpubTechnicalProtection = array_values(array_filter(
            $this->EpubTechnicalProtection,
            static fn ($item): bool => $item !== $epubTechnicalProtection,
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

    public function addMapScale(int $mapScale): static
    {
        $this->MapScale[] = $mapScale;

        return $this;
    }

    public function getMapScale(): array
    {
        return $this->MapScale;
    }

    public function removeMapScale(int $mapScale): static
    {
        $this->MapScale = array_values(array_filter(
            $this->MapScale,
            static fn ($item): bool => $item !== $mapScale,
        ));

        return $this;
    }

    public function addProductClassification(ProductClassification $productClassification): static
    {
        $this->ProductClassification[] = $productClassification;

        return $this;
    }

    public function getProductClassification(): array
    {
        return $this->ProductClassification;
    }

    public function removeProductClassification(ProductClassification $productClassification): static
    {
        $this->ProductClassification = array_values(array_filter(
            $this->ProductClassification,
            static fn ($item): bool => $item !== $productClassification,
        ));

        return $this;
    }

    public function addProductPart(ProductPart $productPart): static
    {
        $this->ProductPart[] = $productPart;

        return $this;
    }

    public function getProductPart(): array
    {
        return $this->ProductPart;
    }

    public function removeProductPart(ProductPart $productPart): static
    {
        $this->ProductPart = array_values(array_filter(
            $this->ProductPart,
            static fn ($item): bool => $item !== $productPart,
        ));

        return $this;
    }

    public function addCollection(Collection $collection): static
    {
        $this->Collection[] = $collection;

        return $this;
    }

    public function getCollection(): array
    {
        return $this->Collection;
    }

    public function removeCollection(Collection $collection): static
    {
        $this->Collection = array_values(array_filter(
            $this->Collection,
            static fn ($item): bool => $item !== $collection,
        ));

        return $this;
    }

    public function setNoCollection(bool $noCollection): static
    {
        $this->NoCollection = $noCollection;

        return $this;
    }

    public function getNoCollection(): ?bool
    {
        return $this->NoCollection;
    }

    public function hasNoCollection(): bool
    {
        return $this->NoCollection === true;
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

    public function setThesisType(CodeList72 $thesisType): static
    {
        $this->ThesisType = $thesisType;

        return $this;
    }

    public function getThesisType(): ?CodeList72
    {
        return $this->ThesisType;
    }

    public function setThesisPresentedTo(string $thesisPresentedTo): static
    {
        $this->ThesisPresentedTo = $thesisPresentedTo;

        return $this;
    }

    public function getThesisPresentedTo(): ?string
    {
        return $this->ThesisPresentedTo;
    }

    public function setThesisYear(Date $thesisYear): static
    {
        $this->ThesisYear = $thesisYear;

        return $this;
    }

    public function getThesisYear(): ?Date
    {
        return $this->ThesisYear;
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

    public function addEvent(Event $event): static
    {
        $this->Event[] = $event;

        return $this;
    }

    public function getEvent(): array
    {
        return $this->Event;
    }

    public function removeEvent(Event $event): static
    {
        $this->Event = array_values(array_filter(
            $this->Event,
            static fn ($item): bool => $item !== $event,
        ));

        return $this;
    }

    public function addEditionType(CodeList21 $editionType): static
    {
        $this->EditionType[] = $editionType;

        return $this;
    }

    public function getEditionType(): array
    {
        return $this->EditionType;
    }

    public function removeEditionType(CodeList21 $editionType): static
    {
        $this->EditionType = array_values(array_filter(
            $this->EditionType,
            static fn ($item): bool => $item !== $editionType,
        ));

        return $this;
    }

    public function setEditionNumber(int $editionNumber): static
    {
        $this->EditionNumber = $editionNumber;

        return $this;
    }

    public function getEditionNumber(): ?int
    {
        return $this->EditionNumber;
    }

    public function setEditionVersionNumber(string $editionVersionNumber): static
    {
        $this->EditionVersionNumber = $editionVersionNumber;

        return $this;
    }

    public function getEditionVersionNumber(): ?string
    {
        return $this->EditionVersionNumber;
    }

    public function addEditionStatement(Text $editionStatement): static
    {
        $this->EditionStatement[] = $editionStatement;

        return $this;
    }

    public function getEditionStatement(): array
    {
        return $this->EditionStatement;
    }

    public function removeEditionStatement(Text $editionStatement): static
    {
        $this->EditionStatement = array_values(array_filter(
            $this->EditionStatement,
            static fn ($item): bool => $item !== $editionStatement,
        ));

        return $this;
    }

    public function setNoEdition(bool $noEdition): static
    {
        $this->NoEdition = $noEdition;

        return $this;
    }

    public function getNoEdition(): ?bool
    {
        return $this->NoEdition;
    }

    public function hasNoEdition(): bool
    {
        return $this->NoEdition === true;
    }

    public function setReligiousText(ReligiousText $religiousText): static
    {
        $this->ReligiousText = $religiousText;

        return $this;
    }

    public function getReligiousText(): ?ReligiousText
    {
        return $this->ReligiousText;
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

    public function addExtent(Extent $extent): static
    {
        $this->Extent[] = $extent;

        return $this;
    }

    public function getExtent(): array
    {
        return $this->Extent;
    }

    public function removeExtent(Extent $extent): static
    {
        $this->Extent = array_values(array_filter(
            $this->Extent,
            static fn ($item): bool => $item !== $extent,
        ));

        return $this;
    }

    public function setIllustrated(CodeList152 $illustrated): static
    {
        $this->Illustrated = $illustrated;

        return $this;
    }

    public function getIllustrated(): ?CodeList152
    {
        return $this->Illustrated;
    }

    public function setNumberOfIllustrations(int $numberOfIllustrations): static
    {
        $this->NumberOfIllustrations = $numberOfIllustrations;

        return $this;
    }

    public function getNumberOfIllustrations(): ?int
    {
        return $this->NumberOfIllustrations;
    }

    public function addIllustrationsNote(Text $illustrationsNote): static
    {
        $this->IllustrationsNote[] = $illustrationsNote;

        return $this;
    }

    public function getIllustrationsNote(): array
    {
        return $this->IllustrationsNote;
    }

    public function removeIllustrationsNote(Text $illustrationsNote): static
    {
        $this->IllustrationsNote = array_values(array_filter(
            $this->IllustrationsNote,
            static fn ($item): bool => $item !== $illustrationsNote,
        ));

        return $this;
    }

    public function addAncillaryContent(AncillaryContent $ancillaryContent): static
    {
        $this->AncillaryContent[] = $ancillaryContent;

        return $this;
    }

    public function getAncillaryContent(): array
    {
        return $this->AncillaryContent;
    }

    public function removeAncillaryContent(AncillaryContent $ancillaryContent): static
    {
        $this->AncillaryContent = array_values(array_filter(
            $this->AncillaryContent,
            static fn ($item): bool => $item !== $ancillaryContent,
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

    public function addAudience(Audience $audience): static
    {
        $this->Audience[] = $audience;

        return $this;
    }

    public function getAudience(): array
    {
        return $this->Audience;
    }

    public function removeAudience(Audience $audience): static
    {
        $this->Audience = array_values(array_filter(
            $this->Audience,
            static fn ($item): bool => $item !== $audience,
        ));

        return $this;
    }

    public function addAudienceRange(AudienceRange $audienceRange): static
    {
        $this->AudienceRange[] = $audienceRange;

        return $this;
    }

    public function getAudienceRange(): array
    {
        return $this->AudienceRange;
    }

    public function removeAudienceRange(AudienceRange $audienceRange): static
    {
        $this->AudienceRange = array_values(array_filter(
            $this->AudienceRange,
            static fn ($item): bool => $item !== $audienceRange,
        ));

        return $this;
    }

    public function addAudienceDescription(Text $audienceDescription): static
    {
        $this->AudienceDescription[] = $audienceDescription;

        return $this;
    }

    public function getAudienceDescription(): array
    {
        return $this->AudienceDescription;
    }

    public function removeAudienceDescription(Text $audienceDescription): static
    {
        $this->AudienceDescription = array_values(array_filter(
            $this->AudienceDescription,
            static fn ($item): bool => $item !== $audienceDescription,
        ));

        return $this;
    }

    public function addComplexity(Complexity $complexity): static
    {
        $this->Complexity[] = $complexity;

        return $this;
    }

    public function getComplexity(): array
    {
        return $this->Complexity;
    }

    public function removeComplexity(Complexity $complexity): static
    {
        $this->Complexity = array_values(array_filter(
            $this->Complexity,
            static fn ($item): bool => $item !== $complexity,
        ));

        return $this;
    }
}
