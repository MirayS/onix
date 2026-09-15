<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList18;
use MirayS\Onix\CodeList\CodeList19;
use MirayS\Onix\Text;

class TextSource
{
    private ?int $SequenceNumber = null;

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

    private array $ProfessionalAffiliation = [];

    private array $TextSourceDescription = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
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
}
