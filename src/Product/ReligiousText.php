<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList88;

class ReligiousText
{
    private ?Bible $Bible = null;

    private ?CodeList88 $ReligiousTextIdentifier = null;

    private array $ReligiousTextFeature = [];

    public function setBible(Bible $bible): static
    {
        $this->Bible = $bible;

        return $this;
    }

    public function getBible(): ?Bible
    {
        return $this->Bible;
    }

    public function setReligiousTextIdentifier(CodeList88 $religiousTextIdentifier): static
    {
        $this->ReligiousTextIdentifier = $religiousTextIdentifier;

        return $this;
    }

    public function getReligiousTextIdentifier(): ?CodeList88
    {
        return $this->ReligiousTextIdentifier;
    }

    public function addReligiousTextFeature(ReligiousTextFeature $religiousTextFeature): static
    {
        $this->ReligiousTextFeature[] = $religiousTextFeature;

        return $this;
    }

    public function getReligiousTextFeature(): array
    {
        return $this->ReligiousTextFeature;
    }

    public function removeReligiousTextFeature(ReligiousTextFeature $religiousTextFeature): static
    {
        $this->ReligiousTextFeature = array_values(array_filter(
            $this->ReligiousTextFeature,
            static fn ($item): bool => $item !== $religiousTextFeature,
        ));

        return $this;
    }
}
