<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList247;
use MirayS\Onix\Date;

class OccurrenceDate
{
    private ?CodeList247 $OccurrenceDateRole = null;

    private ?Date $Date = null;

    public function setOccurrenceDateRole(CodeList247 $occurrenceDateRole): static
    {
        $this->OccurrenceDateRole = $occurrenceDateRole;

        return $this;
    }

    public function getOccurrenceDateRole(): ?CodeList247
    {
        return $this->OccurrenceDateRole;
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
