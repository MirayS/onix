<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList48;
use MirayS\Onix\CodeList\CodeList50;

class Measure
{
    private ?CodeList48 $MeasureType = null;

    private ?string $Measurement = null;

    private ?CodeList50 $MeasureUnitCode = null;

    public function setMeasureType(CodeList48 $measureType): static
    {
        $this->MeasureType = $measureType;

        return $this;
    }

    public function getMeasureType(): ?CodeList48
    {
        return $this->MeasureType;
    }

    public function setMeasurement(string $measurement): static
    {
        $this->Measurement = $measurement;

        return $this;
    }

    public function getMeasurement(): ?string
    {
        return $this->Measurement;
    }

    public function setMeasureUnitCode(CodeList50 $measureUnitCode): static
    {
        $this->MeasureUnitCode = $measureUnitCode;

        return $this;
    }

    public function getMeasureUnitCode(): ?CodeList50
    {
        return $this->MeasureUnitCode;
    }
}
