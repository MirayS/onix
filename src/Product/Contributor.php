<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList17;
use MirayS\Onix\CodeList\CodeList18;
use MirayS\Onix\CodeList\CodeList19;
use MirayS\Onix\CodeList\CodeList74;
use MirayS\Onix\Support\ContributorShortcuts;
use MirayS\Onix\Text;

class Contributor
{
    use ContributorShortcuts;

    private ?int $SequenceNumber = null;

    private array $ContributorRole = [];

    private array $FromLanguage = [];

    private array $ToLanguage = [];

    private ?CodeList18 $NameType = null;

    private array $NameIdentifier = [];

    private ?string $PersonName = null;

    private ?string $PersonNameInverted = null;

    private ?string $TitlesBeforeNames = null;

    private ?string $NamesBeforeKey = null;

    private ?string $PrefixToKey = null;

    private ?string $KeyNames = null;

    private ?string $NamesAfterKey = null;

    private ?string $SuffixToKey = null;

    private ?string $LettersAfterNames = null;

    private ?string $TitlesAfterNames = null;

    private array $CorporateName = [];

    private array $CorporateNameInverted = [];

    private ?CodeList19 $UnnamedPersons = null;

    private array $AlternativeName = [];

    private array $ContributorDate = [];

    private array $ProfessionalAffiliation = [];

    private array $Prize = [];

    private array $BiographicalNote = [];

    private array $Website = [];

    private array $ContributorDescription = [];

    private array $ContributorPlace = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function addContributorRole(CodeList17 $contributorRole): static
    {
        $this->ContributorRole[] = $contributorRole;

        return $this;
    }

    public function getContributorRole(): array
    {
        return $this->ContributorRole;
    }

    public function removeContributorRole(CodeList17 $contributorRole): static
    {
        $this->ContributorRole = array_values(array_filter(
            $this->ContributorRole,
            static fn ($item): bool => $item !== $contributorRole,
        ));

        return $this;
    }

    public function addFromLanguage(CodeList74 $fromLanguage): static
    {
        $this->FromLanguage[] = $fromLanguage;

        return $this;
    }

    public function getFromLanguage(): array
    {
        return $this->FromLanguage;
    }

    public function removeFromLanguage(CodeList74 $fromLanguage): static
    {
        $this->FromLanguage = array_values(array_filter(
            $this->FromLanguage,
            static fn ($item): bool => $item !== $fromLanguage,
        ));

        return $this;
    }

    public function addToLanguage(CodeList74 $toLanguage): static
    {
        $this->ToLanguage[] = $toLanguage;

        return $this;
    }

    public function getToLanguage(): array
    {
        return $this->ToLanguage;
    }

    public function removeToLanguage(CodeList74 $toLanguage): static
    {
        $this->ToLanguage = array_values(array_filter(
            $this->ToLanguage,
            static fn ($item): bool => $item !== $toLanguage,
        ));

        return $this;
    }

    public function setNameType(CodeList18 $nameType): static
    {
        $this->NameType = $nameType;

        return $this;
    }

    public function getNameType(): ?CodeList18
    {
        return $this->NameType;
    }

    public function addNameIdentifier(NameIdentifier $nameIdentifier): static
    {
        $this->NameIdentifier[] = $nameIdentifier;

        return $this;
    }

    public function getNameIdentifier(): array
    {
        return $this->NameIdentifier;
    }

    public function removeNameIdentifier(NameIdentifier $nameIdentifier): static
    {
        $this->NameIdentifier = array_values(array_filter(
            $this->NameIdentifier,
            static fn ($item): bool => $item !== $nameIdentifier,
        ));

        return $this;
    }

    public function setPersonName(string $personName): static
    {
        $this->PersonName = $personName;

        return $this;
    }

    public function getPersonName(): ?string
    {
        return $this->PersonName;
    }

    public function setPersonNameInverted(string $personNameInverted): static
    {
        $this->PersonNameInverted = $personNameInverted;

        return $this;
    }

    public function getPersonNameInverted(): ?string
    {
        return $this->PersonNameInverted;
    }

    public function setTitlesBeforeNames(string $titlesBeforeNames): static
    {
        $this->TitlesBeforeNames = $titlesBeforeNames;

        return $this;
    }

    public function getTitlesBeforeNames(): ?string
    {
        return $this->TitlesBeforeNames;
    }

    public function setNamesBeforeKey(string $namesBeforeKey): static
    {
        $this->NamesBeforeKey = $namesBeforeKey;

        return $this;
    }

    public function getNamesBeforeKey(): ?string
    {
        return $this->NamesBeforeKey;
    }

    public function setPrefixToKey(string $prefixToKey): static
    {
        $this->PrefixToKey = $prefixToKey;

        return $this;
    }

    public function getPrefixToKey(): ?string
    {
        return $this->PrefixToKey;
    }

    public function setKeyNames(string $keyNames): static
    {
        $this->KeyNames = $keyNames;

        return $this;
    }

    public function getKeyNames(): ?string
    {
        return $this->KeyNames;
    }

    public function setNamesAfterKey(string $namesAfterKey): static
    {
        $this->NamesAfterKey = $namesAfterKey;

        return $this;
    }

    public function getNamesAfterKey(): ?string
    {
        return $this->NamesAfterKey;
    }

    public function setSuffixToKey(string $suffixToKey): static
    {
        $this->SuffixToKey = $suffixToKey;

        return $this;
    }

    public function getSuffixToKey(): ?string
    {
        return $this->SuffixToKey;
    }

    public function setLettersAfterNames(string $lettersAfterNames): static
    {
        $this->LettersAfterNames = $lettersAfterNames;

        return $this;
    }

    public function getLettersAfterNames(): ?string
    {
        return $this->LettersAfterNames;
    }

    public function setTitlesAfterNames(string $titlesAfterNames): static
    {
        $this->TitlesAfterNames = $titlesAfterNames;

        return $this;
    }

    public function getTitlesAfterNames(): ?string
    {
        return $this->TitlesAfterNames;
    }

    public function addCorporateName(string $corporateName): static
    {
        $this->CorporateName[] = $corporateName;

        return $this;
    }

    public function getCorporateName(): array
    {
        return $this->CorporateName;
    }

    public function removeCorporateName(string $corporateName): static
    {
        $this->CorporateName = array_values(array_filter(
            $this->CorporateName,
            static fn ($item): bool => $item !== $corporateName,
        ));

        return $this;
    }

    public function addCorporateNameInverted(string $corporateNameInverted): static
    {
        $this->CorporateNameInverted[] = $corporateNameInverted;

        return $this;
    }

    public function getCorporateNameInverted(): array
    {
        return $this->CorporateNameInverted;
    }

    public function removeCorporateNameInverted(string $corporateNameInverted): static
    {
        $this->CorporateNameInverted = array_values(array_filter(
            $this->CorporateNameInverted,
            static fn ($item): bool => $item !== $corporateNameInverted,
        ));

        return $this;
    }

    public function setUnnamedPersons(CodeList19 $unnamedPersons): static
    {
        $this->UnnamedPersons = $unnamedPersons;

        return $this;
    }

    public function getUnnamedPersons(): ?CodeList19
    {
        return $this->UnnamedPersons;
    }

    public function addAlternativeName(AlternativeName $alternativeName): static
    {
        $this->AlternativeName[] = $alternativeName;

        return $this;
    }

    public function getAlternativeName(): array
    {
        return $this->AlternativeName;
    }

    public function removeAlternativeName(AlternativeName $alternativeName): static
    {
        $this->AlternativeName = array_values(array_filter(
            $this->AlternativeName,
            static fn ($item): bool => $item !== $alternativeName,
        ));

        return $this;
    }

    public function addContributorDate(ContributorDate $contributorDate): static
    {
        $this->ContributorDate[] = $contributorDate;

        return $this;
    }

    public function getContributorDate(): array
    {
        return $this->ContributorDate;
    }

    public function removeContributorDate(ContributorDate $contributorDate): static
    {
        $this->ContributorDate = array_values(array_filter(
            $this->ContributorDate,
            static fn ($item): bool => $item !== $contributorDate,
        ));

        return $this;
    }

    public function addProfessionalAffiliation(ProfessionalAffiliation $professionalAffiliation): static
    {
        $this->ProfessionalAffiliation[] = $professionalAffiliation;

        return $this;
    }

    public function getProfessionalAffiliation(): array
    {
        return $this->ProfessionalAffiliation;
    }

    public function removeProfessionalAffiliation(ProfessionalAffiliation $professionalAffiliation): static
    {
        $this->ProfessionalAffiliation = array_values(array_filter(
            $this->ProfessionalAffiliation,
            static fn ($item): bool => $item !== $professionalAffiliation,
        ));

        return $this;
    }

    public function addPrize(Prize $prize): static
    {
        $this->Prize[] = $prize;

        return $this;
    }

    public function getPrize(): array
    {
        return $this->Prize;
    }

    public function removePrize(Prize $prize): static
    {
        $this->Prize = array_values(array_filter(
            $this->Prize,
            static fn ($item): bool => $item !== $prize,
        ));

        return $this;
    }

    public function addBiographicalNote(Text $biographicalNote): static
    {
        $this->BiographicalNote[] = $biographicalNote;

        return $this;
    }

    public function getBiographicalNote(): array
    {
        return $this->BiographicalNote;
    }

    public function removeBiographicalNote(Text $biographicalNote): static
    {
        $this->BiographicalNote = array_values(array_filter(
            $this->BiographicalNote,
            static fn ($item): bool => $item !== $biographicalNote,
        ));

        return $this;
    }

    public function addWebsite(Website $website): static
    {
        $this->Website[] = $website;

        return $this;
    }

    public function getWebsite(): array
    {
        return $this->Website;
    }

    public function removeWebsite(Website $website): static
    {
        $this->Website = array_values(array_filter(
            $this->Website,
            static fn ($item): bool => $item !== $website,
        ));

        return $this;
    }

    public function addContributorDescription(Text $contributorDescription): static
    {
        $this->ContributorDescription[] = $contributorDescription;

        return $this;
    }

    public function getContributorDescription(): array
    {
        return $this->ContributorDescription;
    }

    public function removeContributorDescription(Text $contributorDescription): static
    {
        $this->ContributorDescription = array_values(array_filter(
            $this->ContributorDescription,
            static fn ($item): bool => $item !== $contributorDescription,
        ));

        return $this;
    }

    public function addContributorPlace(ContributorPlace $contributorPlace): static
    {
        $this->ContributorPlace[] = $contributorPlace;

        return $this;
    }

    public function getContributorPlace(): array
    {
        return $this->ContributorPlace;
    }

    public function removeContributorPlace(ContributorPlace $contributorPlace): static
    {
        $this->ContributorPlace = array_values(array_filter(
            $this->ContributorPlace,
            static fn ($item): bool => $item !== $contributorPlace,
        ));

        return $this;
    }
}
