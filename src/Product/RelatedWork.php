<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList164;

class RelatedWork
{
    private ?CodeList164 $WorkRelationCode = null;

    private array $WorkIdentifier = [];

    public function setWorkRelationCode(CodeList164 $workRelationCode): static
    {
        $this->WorkRelationCode = $workRelationCode;

        return $this;
    }

    public function getWorkRelationCode(): ?CodeList164
    {
        return $this->WorkRelationCode;
    }

    public function addWorkIdentifier(WorkIdentifier $workIdentifier): static
    {
        $this->WorkIdentifier[] = $workIdentifier;

        return $this;
    }

    public function getWorkIdentifier(): array
    {
        return $this->WorkIdentifier;
    }

    public function removeWorkIdentifier(WorkIdentifier $workIdentifier): static
    {
        $this->WorkIdentifier = array_values(array_filter(
            $this->WorkIdentifier,
            static fn ($item): bool => $item !== $workIdentifier,
        ));

        return $this;
    }
}
