<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList162;
use MirayS\Onix\Text;

class ResourceVersionFeature
{
    private ?CodeList162 $ResourceVersionFeatureType = null;

    private ?string $FeatureValue = null;

    private array $FeatureNote = [];

    public function setResourceVersionFeatureType(CodeList162 $resourceVersionFeatureType): static
    {
        $this->ResourceVersionFeatureType = $resourceVersionFeatureType;

        return $this;
    }

    public function getResourceVersionFeatureType(): ?CodeList162
    {
        return $this->ResourceVersionFeatureType;
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
