<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList163;
use MirayS\Onix\Date;

class PublishingDate
{
    private ?CodeList163 $PublishingDateRole = null;

    private ?Date $Date = null;

    public function setPublishingDateRole(CodeList163 $publishingDateRole): static
    {
        $this->PublishingDateRole = $publishingDateRole;

        return $this;
    }

    public function getPublishingDateRole(): ?CodeList163
    {
        return $this->PublishingDateRole;
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
