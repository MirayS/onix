<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList155;
use MirayS\Onix\Date;

class ContentDate
{
    private ?CodeList155 $ContentDateRole = null;

    private ?Date $Date = null;

    public function setContentDateRole(CodeList155 $contentDateRole): static
    {
        $this->ContentDateRole = $contentDateRole;

        return $this;
    }

    public function getContentDateRole(): ?CodeList155
    {
        return $this->ContentDateRole;
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
