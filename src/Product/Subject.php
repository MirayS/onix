<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList27;

class Subject
{
    private ?bool $MainSubject = null;

    private ?CodeList27 $SubjectSchemeIdentifier = null;

    private ?string $SubjectSchemeName = null;

    private ?string $SubjectSchemeVersion = null;

    private ?string $SubjectCode = null;

    private array $SubjectHeadingText = [];

    public function setMainSubject(bool $mainSubject): static
    {
        $this->MainSubject = $mainSubject;

        return $this;
    }

    public function getMainSubject(): ?bool
    {
        return $this->MainSubject;
    }

    public function hasMainSubject(): bool
    {
        return $this->MainSubject === true;
    }

    public function setSubjectSchemeIdentifier(CodeList27 $subjectSchemeIdentifier): static
    {
        $this->SubjectSchemeIdentifier = $subjectSchemeIdentifier;

        return $this;
    }

    public function getSubjectSchemeIdentifier(): ?CodeList27
    {
        return $this->SubjectSchemeIdentifier;
    }

    public function setSubjectSchemeName(string $subjectSchemeName): static
    {
        $this->SubjectSchemeName = $subjectSchemeName;

        return $this;
    }

    public function getSubjectSchemeName(): ?string
    {
        return $this->SubjectSchemeName;
    }

    public function setSubjectSchemeVersion(string $subjectSchemeVersion): static
    {
        $this->SubjectSchemeVersion = $subjectSchemeVersion;

        return $this;
    }

    public function getSubjectSchemeVersion(): ?string
    {
        return $this->SubjectSchemeVersion;
    }

    public function setSubjectCode(string $subjectCode): static
    {
        $this->SubjectCode = $subjectCode;

        return $this;
    }

    public function getSubjectCode(): ?string
    {
        return $this->SubjectCode;
    }

    public function addSubjectHeadingText(string $subjectHeadingText): static
    {
        $this->SubjectHeadingText[] = $subjectHeadingText;

        return $this;
    }

    public function getSubjectHeadingText(): array
    {
        return $this->SubjectHeadingText;
    }

    public function removeSubjectHeadingText(string $subjectHeadingText): static
    {
        $this->SubjectHeadingText = array_values(array_filter(
            $this->SubjectHeadingText,
            static fn ($item): bool => $item !== $subjectHeadingText,
        ));

        return $this;
    }
}
