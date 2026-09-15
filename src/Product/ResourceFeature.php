<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList160;
use MirayS\Onix\Text;

class ResourceFeature
{
    private ?CodeList160 $ResourceFeatureType = null;

    private ?string $FeatureValue = null;

    private array $FeatureNote = [];

    public function setResourceFeatureType(CodeList160 $resourceFeatureType): static
    {
        $this->ResourceFeatureType = $resourceFeatureType;

        return $this;
    }

    public function getResourceFeatureType(): ?CodeList160
    {
        return $this->ResourceFeatureType;
    }

    public function setFeatureValue(string $featureValue): static
    {
        $this->FeatureValue = $featureValue;

        return $this;
    }

    public function getFeatureValue(): ?string
    {
        return $this->FeatureValue;
    }

    public function addFeatureNote(Text $featureNote): static
    {
        $this->FeatureNote[] = $featureNote;

        return $this;
    }

    public function getFeatureNote(): array
    {
        return $this->FeatureNote;
    }

    public function removeFeatureNote(Text $featureNote): static
    {
        $this->FeatureNote = array_values(array_filter(
            $this->FeatureNote,
            static fn ($item): bool => $item !== $featureNote,
        ));

        return $this;
    }
}
