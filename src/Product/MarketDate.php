<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList163;
use MirayS\Onix\Date;

class MarketDate
{
    private ?CodeList163 $MarketDateRole = null;

    private ?Date $Date = null;

    public function setMarketDateRole(CodeList163 $marketDateRole): static
    {
        $this->MarketDateRole = $marketDateRole;

        return $this;
    }

    public function getMarketDateRole(): ?CodeList163
    {
        return $this->MarketDateRole;
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
