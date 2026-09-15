<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList17;

class ContributorReference
{
    private ?int $SequenceNumber = null;

    private array $ContributorRole = [];

    private array $NameIdentifier = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function addContributorRole(CodeList17 $contributorRole): static
    {
        $this->ContributorRole[] = $contributorRole;

        return $this;
    }

    public function getContributorRole(): array
    {
        return $this->ContributorRole;
    }

    public function removeContributorRole(CodeList17 $contributorRole): static
    {
        $this->ContributorRole = array_values(array_filter(
            $this->ContributorRole,
            static fn ($item): bool => $item !== $contributorRole,
        ));

        return $this;
    }

    public function addNameIdentifier(NameIdentifier $nameIdentifier): static
    {
        $this->NameIdentifier[] = $nameIdentifier;

        return $this;
    }

    public function getNameIdentifier(): array
    {
        return $this->NameIdentifier;
    }

    public function removeNameIdentifier(NameIdentifier $nameIdentifier): static
    {
        $this->NameIdentifier = array_values(array_filter(
            $this->NameIdentifier,
            static fn ($item): bool => $item !== $nameIdentifier,
        ));

        return $this;
    }
}
