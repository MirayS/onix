<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList254;
use MirayS\Onix\Date;

class ResourceFileDate
{
    private ?CodeList254 $ResourceFileDateRole = null;

    private ?Date $Date = null;

    public function setResourceFileDateRole(CodeList254 $resourceFileDateRole): static
    {
        $this->ResourceFileDateRole = $resourceFileDateRole;

        return $this;
    }

    public function getResourceFileDateRole(): ?CodeList254
    {
        return $this->ResourceFileDateRole;
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
