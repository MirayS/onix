<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList141;
use MirayS\Onix\CodeList\CodeList142;

class Barcode
{
    private ?CodeList141 $BarcodeType = null;

    private ?CodeList142 $PositionOnProduct = null;

    public function setBarcodeType(CodeList141 $barcodeType): static
    {
        $this->BarcodeType = $barcodeType;

        return $this;
    }

    public function getBarcodeType(): ?CodeList141
    {
        return $this->BarcodeType;
    }

    public function setPositionOnProduct(CodeList142 $positionOnProduct): static
    {
        $this->PositionOnProduct = $positionOnProduct;

        return $this;
    }

    public function getPositionOnProduct(): ?CodeList142
    {
        return $this->PositionOnProduct;
    }
}
