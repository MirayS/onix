<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList215;
use MirayS\Onix\CodeList\CodeList216;

class Velocity
{
    private ?CodeList216 $VelocityMetric = null;

    private ?int $Rate = null;

    private ?CodeList215 $Proximity = null;

    public function setVelocityMetric(CodeList216 $velocityMetric): static
    {
        $this->VelocityMetric = $velocityMetric;

        return $this;
    }

    public function getVelocityMetric(): ?CodeList216
    {
        return $this->VelocityMetric;
    }

    public function setRate(int $rate): static
    {
        $this->Rate = $rate;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->Rate;
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
}
