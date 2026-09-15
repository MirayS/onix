<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList177;
use MirayS\Onix\Date;

class ContributorDate
{
    private ?CodeList177 $ContributorDateRole = null;

    private ?Date $Date = null;

    public function setContributorDateRole(CodeList177 $contributorDateRole): static
    {
        $this->ContributorDateRole = $contributorDateRole;

        return $this;
    }

    public function getContributorDateRole(): ?CodeList177
    {
        return $this->ContributorDateRole;
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
