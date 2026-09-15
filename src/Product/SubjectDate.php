<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList177;
use MirayS\Onix\Date;

class SubjectDate
{
    private ?CodeList177 $SubjectDateRole = null;

    private ?Date $Date = null;

    public function setSubjectDateRole(CodeList177 $subjectDateRole): static
    {
        $this->SubjectDateRole = $subjectDateRole;

        return $this;
    }

    public function getSubjectDateRole(): ?CodeList177
    {
        return $this->SubjectDateRole;
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
