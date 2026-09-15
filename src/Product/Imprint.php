<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class Imprint
{
    private array $ImprintIdentifier = [];

    private ?string $ImprintName = null;

    private ?string $ImprintNameInverted = null;

    public function addImprintIdentifier(ImprintIdentifier $imprintIdentifier): static
    {
        $this->ImprintIdentifier[] = $imprintIdentifier;

        return $this;
    }

    public function getImprintIdentifier(): array
    {
        return $this->ImprintIdentifier;
    }

    public function removeImprintIdentifier(ImprintIdentifier $imprintIdentifier): static
    {
        $this->ImprintIdentifier = array_values(array_filter(
            $this->ImprintIdentifier,
            static fn ($item): bool => $item !== $imprintIdentifier,
        ));

        return $this;
    }

    public function setImprintName(string $imprintName): static
    {
        $this->ImprintName = $imprintName;

        return $this;
    }

    public function getImprintName(): ?string
    {
        return $this->ImprintName;
    }

    public function setImprintNameInverted(string $imprintNameInverted): static
    {
        $this->ImprintNameInverted = $imprintNameInverted;

        return $this;
    }

    public function getImprintNameInverted(): ?string
    {
        return $this->ImprintNameInverted;
    }
}
