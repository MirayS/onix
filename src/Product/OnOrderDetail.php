<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList215;
use MirayS\Onix\Date;

class OnOrderDetail
{
    private ?int $OnOrder = null;

    private ?CodeList215 $Proximity = null;

    private ?Date $ExpectedDate = null;

    public function setOnOrder(int $onOrder): static
    {
        $this->OnOrder = $onOrder;

        return $this;
    }

    public function getOnOrder(): ?int
    {
        return $this->OnOrder;
    }

    public function setProximity(CodeList215 $proximity): static
    {
        $this->Proximity = $proximity;

        return $this;
    }

    public function getProximity(): ?CodeList215
    {
        return $this->Proximity;
    }

    public function setExpectedDate(Date $expectedDate): static
    {
        $this->ExpectedDate = $expectedDate;

        return $this;
    }

    public function getExpectedDate(): ?Date
    {
        return $this->ExpectedDate;
    }
}
