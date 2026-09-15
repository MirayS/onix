<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList89;
use MirayS\Onix\CodeList\CodeList90;
use MirayS\Onix\Text;

class ReligiousTextFeature
{
    private ?CodeList89 $ReligiousTextFeatureType = null;

    private ?CodeList90 $ReligiousTextFeatureCode = null;

    private array $ReligiousTextFeatureDescription = [];

    public function setReligiousTextFeatureType(CodeList89 $religiousTextFeatureType): static
    {
        $this->ReligiousTextFeatureType = $religiousTextFeatureType;

        return $this;
    }

    public function getReligiousTextFeatureType(): ?CodeList89
    {
        return $this->ReligiousTextFeatureType;
    }

    public function setReligiousTextFeatureCode(CodeList90 $religiousTextFeatureCode): static
    {
        $this->ReligiousTextFeatureCode = $religiousTextFeatureCode;

        return $this;
    }

    public function getReligiousTextFeatureCode(): ?CodeList90
    {
        return $this->ReligiousTextFeatureCode;
    }

    public function addReligiousTextFeatureDescription(Text $religiousTextFeatureDescription): static
    {
        $this->ReligiousTextFeatureDescription[] = $religiousTextFeatureDescription;

        return $this;
    }

    public function getReligiousTextFeatureDescription(): array
    {
        return $this->ReligiousTextFeatureDescription;
    }

    public function removeReligiousTextFeatureDescription(Text $religiousTextFeatureDescription): static
    {
        $this->ReligiousTextFeatureDescription = array_values(array_filter(
            $this->ReligiousTextFeatureDescription,
            static fn ($item): bool => $item !== $religiousTextFeatureDescription,
        ));

        return $this;
    }
}
