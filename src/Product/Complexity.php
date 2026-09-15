<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList32;

class Complexity
{
    private ?CodeList32 $ComplexitySchemeIdentifier = null;

    private ?string $ComplexityCode = null;

    public function setComplexitySchemeIdentifier(CodeList32 $complexitySchemeIdentifier): static
    {
        $this->ComplexitySchemeIdentifier = $complexitySchemeIdentifier;

        return $this;
    }

    public function getComplexitySchemeIdentifier(): ?CodeList32
    {
        return $this->ComplexitySchemeIdentifier;
    }

    public function setComplexityCode(string $complexityCode): static
    {
        $this->ComplexityCode = $complexityCode;

        return $this;
    }

    public function getComplexityCode(): ?string
    {
        return $this->ComplexityCode;
    }
}
