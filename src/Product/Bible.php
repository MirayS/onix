<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList82;
use MirayS\Onix\CodeList\CodeList83;
use MirayS\Onix\CodeList\CodeList84;
use MirayS\Onix\CodeList\CodeList85;
use MirayS\Onix\CodeList\CodeList86;
use MirayS\Onix\CodeList\CodeList87;
use MirayS\Onix\CodeList\CodeList97;

class Bible
{
    private array $BibleContents = [];

    private array $BibleVersion = [];

    private ?CodeList84 $StudyBibleType = null;

    private array $BiblePurpose = [];

    private ?CodeList86 $BibleTextOrganization = null;

    private ?CodeList87 $BibleReferenceLocation = null;

    private array $BibleTextFeature = [];

    public function addBibleContents(CodeList82 $bibleContents): static
    {
        $this->BibleContents[] = $bibleContents;

        return $this;
    }

    public function getBibleContents(): array
    {
        return $this->BibleContents;
    }

    public function removeBibleContents(CodeList82 $bibleContents): static
    {
        $this->BibleContents = array_values(array_filter(
            $this->BibleContents,
            static fn ($item): bool => $item !== $bibleContents,
        ));

        return $this;
    }

    public function addBibleVersion(CodeList83 $bibleVersion): static
    {
        $this->BibleVersion[] = $bibleVersion;

        return $this;
    }

    public function getBibleVersion(): array
    {
        return $this->BibleVersion;
    }

    public function removeBibleVersion(CodeList83 $bibleVersion): static
    {
        $this->BibleVersion = array_values(array_filter(
            $this->BibleVersion,
            static fn ($item): bool => $item !== $bibleVersion,
        ));

        return $this;
    }

    public function setStudyBibleType(CodeList84 $studyBibleType): static
    {
        $this->StudyBibleType = $studyBibleType;

        return $this;
    }

    public function getStudyBibleType(): ?CodeList84
    {
        return $this->StudyBibleType;
    }

    public function addBiblePurpose(CodeList85 $biblePurpose): static
    {
        $this->BiblePurpose[] = $biblePurpose;

        return $this;
    }

    public function getBiblePurpose(): array
    {
        return $this->BiblePurpose;
    }

    public function removeBiblePurpose(CodeList85 $biblePurpose): static
    {
        $this->BiblePurpose = array_values(array_filter(
            $this->BiblePurpose,
            static fn ($item): bool => $item !== $biblePurpose,
        ));

        return $this;
    }

    public function setBibleTextOrganization(CodeList86 $bibleTextOrganization): static
    {
        $this->BibleTextOrganization = $bibleTextOrganization;

        return $this;
    }

    public function getBibleTextOrganization(): ?CodeList86
    {
        return $this->BibleTextOrganization;
    }

    public function setBibleReferenceLocation(CodeList87 $bibleReferenceLocation): static
    {
        $this->BibleReferenceLocation = $bibleReferenceLocation;

        return $this;
    }

    public function getBibleReferenceLocation(): ?CodeList87
    {
        return $this->BibleReferenceLocation;
    }

    public function addBibleTextFeature(CodeList97 $bibleTextFeature): static
    {
        $this->BibleTextFeature[] = $bibleTextFeature;

        return $this;
    }

    public function getBibleTextFeature(): array
    {
        return $this->BibleTextFeature;
    }

    public function removeBibleTextFeature(CodeList97 $bibleTextFeature): static
    {
        $this->BibleTextFeature = array_values(array_filter(
            $this->BibleTextFeature,
            static fn ($item): bool => $item !== $bibleTextFeature,
        ));

        return $this;
    }
}
