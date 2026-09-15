<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList260;
use MirayS\Onix\Date;

class EpubLicenseDate
{
    private ?CodeList260 $EpubLicenseDateRole = null;

    private ?Date $Date = null;

    public function setEpubLicenseDateRole(CodeList260 $epubLicenseDateRole): static
    {
        $this->EpubLicenseDateRole = $epubLicenseDateRole;

        return $this;
    }

    public function getEpubLicenseDateRole(): ?CodeList260
    {
        return $this->EpubLicenseDateRole;
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
