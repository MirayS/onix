<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList53;

class ReturnsConditions
{
    private ?CodeList53 $ReturnsCodeType = null;

    private ?string $ReturnsCodeTypeName = null;

    private ?string $ReturnsCode = null;

    private array $ReturnsNote = [];

    public function setReturnsCodeType(CodeList53 $returnsCodeType): static
    {
        $this->ReturnsCodeType = $returnsCodeType;

        return $this;
    }

    public function getReturnsCodeType(): ?CodeList53
    {
        return $this->ReturnsCodeType;
    }

    public function setReturnsCodeTypeName(string $returnsCodeTypeName): static
    {
        $this->ReturnsCodeTypeName = $returnsCodeTypeName;

        return $this;
    }

    public function getReturnsCodeTypeName(): ?string
    {
        return $this->ReturnsCodeTypeName;
    }

    public function setReturnsCode(string $returnsCode): static
    {
        $this->ReturnsCode = $returnsCode;

        return $this;
    }

    public function getReturnsCode(): ?string
    {
        return $this->ReturnsCode;
    }

    public function addReturnsNote(string $returnsNote): static
    {
        $this->ReturnsNote[] = $returnsNote;

        return $this;
    }

    public function getReturnsNote(): array
    {
        return $this->ReturnsNote;
    }

    public function removeReturnsNote(string $returnsNote): static
    {
        $this->ReturnsNote = array_values(array_filter(
            $this->ReturnsNote,
            static fn ($item): bool => $item !== $returnsNote,
        ));

        return $this;
    }
}
