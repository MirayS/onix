<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList25;
use MirayS\Onix\Text;

class AncillaryContent
{
    private ?CodeList25 $AncillaryContentType = null;

    private array $AncillaryContentDescription = [];

    private ?int $Number = null;

    public function setAncillaryContentType(CodeList25 $ancillaryContentType): static
    {
        $this->AncillaryContentType = $ancillaryContentType;

        return $this;
    }

    public function getAncillaryContentType(): ?CodeList25
    {
        return $this->AncillaryContentType;
    }

    public function addAncillaryContentDescription(Text $ancillaryContentDescription): static
    {
        $this->AncillaryContentDescription[] = $ancillaryContentDescription;

        return $this;
    }

    public function getAncillaryContentDescription(): array
    {
        return $this->AncillaryContentDescription;
    }

    public function removeAncillaryContentDescription(Text $ancillaryContentDescription): static
    {
        $this->AncillaryContentDescription = array_values(array_filter(
            $this->AncillaryContentDescription,
            static fn ($item): bool => $item !== $ancillaryContentDescription,
        ));

        return $this;
    }

    public function setNumber(int $number): static
    {
        $this->Number = $number;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->Number;
    }
}
