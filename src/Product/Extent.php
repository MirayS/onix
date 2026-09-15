<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList23;
use MirayS\Onix\CodeList\CodeList24;

class Extent
{
    private ?CodeList23 $ExtentType = null;

    private ?string $ExtentValue = null;

    private ?string $ExtentValueRoman = null;

    private ?CodeList24 $ExtentUnit = null;

    public function setExtentType(CodeList23 $extentType): static
    {
        $this->ExtentType = $extentType;

        return $this;
    }

    public function getExtentType(): ?CodeList23
    {
        return $this->ExtentType;
    }

    public function setExtentValue(string $extentValue): static
    {
        $this->ExtentValue = $extentValue;

        return $this;
    }

    public function getExtentValue(): ?string
    {
        return $this->ExtentValue;
    }

    public function setExtentValueRoman(string $extentValueRoman): static
    {
        $this->ExtentValueRoman = $extentValueRoman;

        return $this;
    }

    public function getExtentValueRoman(): ?string
    {
        return $this->ExtentValueRoman;
    }

    public function setExtentUnit(CodeList24 $extentUnit): static
    {
        $this->ExtentUnit = $extentUnit;

        return $this;
    }

    public function getExtentUnit(): ?CodeList24
    {
        return $this->ExtentUnit;
    }
}
