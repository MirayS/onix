<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList219;
use MirayS\Onix\Date;

class CopyrightStatement
{
    private ?CodeList219 $CopyrightType = null;

    private array $CopyrightYear = [];

    private array $CopyrightOwner = [];

    public function setCopyrightType(CodeList219 $copyrightType): static
    {
        $this->CopyrightType = $copyrightType;

        return $this;
    }

    public function getCopyrightType(): ?CodeList219
    {
        return $this->CopyrightType;
    }

    public function addCopyrightYear(Date $copyrightYear): static
    {
        $this->CopyrightYear[] = $copyrightYear;

        return $this;
    }

    public function getCopyrightYear(): array
    {
        return $this->CopyrightYear;
    }

    public function removeCopyrightYear(Date $copyrightYear): static
    {
        $this->CopyrightYear = array_values(array_filter(
            $this->CopyrightYear,
            static fn ($item): bool => $item !== $copyrightYear,
        ));

        return $this;
    }

    public function addCopyrightOwner(CopyrightOwner $copyrightOwner): static
    {
        $this->CopyrightOwner[] = $copyrightOwner;

        return $this;
    }

    public function getCopyrightOwner(): array
    {
        return $this->CopyrightOwner;
    }

    public function removeCopyrightOwner(CopyrightOwner $copyrightOwner): static
    {
        $this->CopyrightOwner = array_values(array_filter(
            $this->CopyrightOwner,
            static fn ($item): bool => $item !== $copyrightOwner,
        ));

        return $this;
    }
}
