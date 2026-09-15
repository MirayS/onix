<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList29;

class Audience
{
    private ?bool $MainAudience = null;

    private ?CodeList29 $AudienceCodeType = null;

    private ?string $AudienceCodeTypeName = null;

    private ?string $AudienceCodeValue = null;

    private array $AudienceHeadingText = [];

    public function setMainAudience(bool $mainAudience): static
    {
        $this->MainAudience = $mainAudience;

        return $this;
    }

    public function getMainAudience(): ?bool
    {
        return $this->MainAudience;
    }

    public function hasMainAudience(): bool
    {
        return $this->MainAudience === true;
    }

    public function setAudienceCodeType(CodeList29 $audienceCodeType): static
    {
        $this->AudienceCodeType = $audienceCodeType;

        return $this;
    }

    public function getAudienceCodeType(): ?CodeList29
    {
        return $this->AudienceCodeType;
    }

    public function setAudienceCodeTypeName(string $audienceCodeTypeName): static
    {
        $this->AudienceCodeTypeName = $audienceCodeTypeName;

        return $this;
    }

    public function getAudienceCodeTypeName(): ?string
    {
        return $this->AudienceCodeTypeName;
    }

    public function setAudienceCodeValue(string $audienceCodeValue): static
    {
        $this->AudienceCodeValue = $audienceCodeValue;

        return $this;
    }

    public function getAudienceCodeValue(): ?string
    {
        return $this->AudienceCodeValue;
    }

    public function addAudienceHeadingText(string $audienceHeadingText): static
    {
        $this->AudienceHeadingText[] = $audienceHeadingText;

        return $this;
    }

    public function getAudienceHeadingText(): array
    {
        return $this->AudienceHeadingText;
    }

    public function removeAudienceHeadingText(string $audienceHeadingText): static
    {
        $this->AudienceHeadingText = array_values(array_filter(
            $this->AudienceHeadingText,
            static fn ($item): bool => $item !== $audienceHeadingText,
        ));

        return $this;
    }
}
