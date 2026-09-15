<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ProfessionalAffiliation
{
    private array $ProfessionalPosition = [];

    private array $AffiliationIdentifier = [];

    private array $Affiliation = [];

    public function addProfessionalPosition(string $professionalPosition): static
    {
        $this->ProfessionalPosition[] = $professionalPosition;

        return $this;
    }

    public function getProfessionalPosition(): array
    {
        return $this->ProfessionalPosition;
    }

    public function removeProfessionalPosition(string $professionalPosition): static
    {
        $this->ProfessionalPosition = array_values(array_filter(
            $this->ProfessionalPosition,
            static fn ($item): bool => $item !== $professionalPosition,
        ));

        return $this;
    }

    public function addAffiliationIdentifier(AffiliationIdentifier $affiliationIdentifier): static
    {
        $this->AffiliationIdentifier[] = $affiliationIdentifier;

        return $this;
    }

    public function getAffiliationIdentifier(): array
    {
        return $this->AffiliationIdentifier;
    }

    public function removeAffiliationIdentifier(AffiliationIdentifier $affiliationIdentifier): static
    {
        $this->AffiliationIdentifier = array_values(array_filter(
            $this->AffiliationIdentifier,
            static fn ($item): bool => $item !== $affiliationIdentifier,
        ));

        return $this;
    }

    public function addAffiliation(string $affiliation): static
    {
        $this->Affiliation[] = $affiliation;

        return $this;
    }

    public function getAffiliation(): array
    {
        return $this->Affiliation;
    }

    public function removeAffiliation(string $affiliation): static
    {
        $this->Affiliation = array_values(array_filter(
            $this->Affiliation,
            static fn ($item): bool => $item !== $affiliation,
        ));

        return $this;
    }
}
