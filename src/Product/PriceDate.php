<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList173;
use MirayS\Onix\Date;

class PriceDate
{
    private ?CodeList173 $PriceDateRole = null;

    private ?Date $Date = null;

    public function setPriceDateRole(CodeList173 $priceDateRole): static
    {
        $this->PriceDateRole = $priceDateRole;

        return $this;
    }

    public function getPriceDateRole(): ?CodeList173
    {
        return $this->PriceDateRole;
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
