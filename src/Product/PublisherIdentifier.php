<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList44;

class PublisherIdentifier
{
    private ?CodeList44 $PublisherIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setPublisherIDType(CodeList44 $publisherIDType): static
    {
        $this->PublisherIDType = $publisherIDType;

        return $this;
    }

    public function getPublisherIDType(): ?CodeList44
    {
        return $this->PublisherIDType;
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
