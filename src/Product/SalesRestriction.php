<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList71;
use MirayS\Onix\Date;
use MirayS\Onix\Text;

class SalesRestriction
{
    private ?CodeList71 $SalesRestrictionType = null;

    private array $SalesOutlet = [];

    private array $SalesRestrictionNote = [];

    private ?Date $StartDate = null;

    private ?Date $EndDate = null;

    public function setSalesRestrictionType(CodeList71 $salesRestrictionType): static
    {
        $this->SalesRestrictionType = $salesRestrictionType;

        return $this;
    }

    public function getSalesRestrictionType(): ?CodeList71
    {
        return $this->SalesRestrictionType;
    }

    public function addSalesOutlet(SalesOutlet $salesOutlet): static
    {
        $this->SalesOutlet[] = $salesOutlet;

        return $this;
    }

    public function getSalesOutlet(): array
    {
        return $this->SalesOutlet;
    }

    public function removeSalesOutlet(SalesOutlet $salesOutlet): static
    {
        $this->SalesOutlet = array_values(array_filter(
            $this->SalesOutlet,
            static fn ($item): bool => $item !== $salesOutlet,
        ));

        return $this;
    }

    public function addSalesRestrictionNote(Text $salesRestrictionNote): static
    {
        $this->SalesRestrictionNote[] = $salesRestrictionNote;

        return $this;
    }

    public function getSalesRestrictionNote(): array
    {
        return $this->SalesRestrictionNote;
    }

    public function removeSalesRestrictionNote(Text $salesRestrictionNote): static
    {
        $this->SalesRestrictionNote = array_values(array_filter(
            $this->SalesRestrictionNote,
            static fn ($item): bool => $item !== $salesRestrictionNote,
        ));

        return $this;
    }

    public function setStartDate(Date $startDate): static
    {
        $this->StartDate = $startDate;

        return $this;
    }

    public function getStartDate(): ?Date
    {
        return $this->StartDate;
    }

    public function setEndDate(Date $endDate): static
    {
        $this->EndDate = $endDate;

        return $this;
    }

    public function getEndDate(): ?Date
    {
        return $this->EndDate;
    }
}
