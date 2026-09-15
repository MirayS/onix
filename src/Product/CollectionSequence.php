<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList197;

class CollectionSequence
{
    private ?CodeList197 $CollectionSequenceType = null;

    private ?string $CollectionSequenceTypeName = null;

    private ?string $CollectionSequenceNumber = null;

    public function setCollectionSequenceType(CodeList197 $collectionSequenceType): static
    {
        $this->CollectionSequenceType = $collectionSequenceType;

        return $this;
    }

    public function getCollectionSequenceType(): ?CodeList197
    {
        return $this->CollectionSequenceType;
    }

    public function setCollectionSequenceTypeName(string $collectionSequenceTypeName): static
    {
        $this->CollectionSequenceTypeName = $collectionSequenceTypeName;

        return $this;
    }

    public function getCollectionSequenceTypeName(): ?string
    {
        return $this->CollectionSequenceTypeName;
    }

    public function setCollectionSequenceNumber(string $collectionSequenceNumber): static
    {
        $this->CollectionSequenceNumber = $collectionSequenceNumber;

        return $this;
    }

    public function getCollectionSequenceNumber(): ?string
    {
        return $this->CollectionSequenceNumber;
    }
}
