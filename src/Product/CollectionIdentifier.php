<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList13;
use MirayS\Onix\CodeList\CodeList149;

class CollectionIdentifier
{
    private ?CodeList149 $CollectionElementLevel = null;

    private ?CodeList13 $CollectionIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setCollectionElementLevel(CodeList149 $collectionElementLevel): static
    {
        $this->CollectionElementLevel = $collectionElementLevel;

        return $this;
    }

    public function getCollectionElementLevel(): ?CodeList149
    {
        return $this->CollectionElementLevel;
    }

    public function setCollectionIDType(CodeList13 $collectionIDType): static
    {
        $this->CollectionIDType = $collectionIDType;

        return $this;
    }

    public function getCollectionIDType(): ?CodeList13
    {
        return $this->CollectionIDType;
    }

    public function setIDTypeName(string $iDTypeName): static
    {
        $this->IDTypeName = $iDTypeName;

        return $this;
    }

    public function getIDTypeName(): ?string
    {
        return $this->IDTypeName;
    }

    public function setIDValue(string $iDValue): static
    {
        $this->IDValue = $iDValue;

        return $this;
    }

    public function getIDValue(): ?string
    {
        return $this->IDValue;
    }
}
