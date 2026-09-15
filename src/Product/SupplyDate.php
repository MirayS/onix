<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList166;
use MirayS\Onix\Date;

class SupplyDate
{
    private ?CodeList166 $SupplyDateRole = null;

    private ?Date $Date = null;

    public function setSupplyDateRole(CodeList166 $supplyDateRole): static
    {
        $this->SupplyDateRole = $supplyDateRole;

        return $this;
    }

    public function getSupplyDateRole(): ?CodeList166
    {
        return $this->SupplyDateRole;
    }

    public function setDate(Date $date): static
    {
        $this->Date = $date;

        return $this;
    }

    public function getDate(): ?Date
    {
        return $this->Date;
    }
}
