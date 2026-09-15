<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList93;

class Supplier
{
    private ?CodeList93 $SupplierRole = null;

    private array $SupplierIdentifier = [];

    private ?string $SupplierName = null;

    private array $TelephoneNumber = [];

    private array $FaxNumber = [];

    private array $EmailAddress = [];

    private array $Website = [];

    public function setSupplierRole(CodeList93 $supplierRole): static
    {
        $this->SupplierRole = $supplierRole;

        return $this;
    }

    public function getSupplierRole(): ?CodeList93
    {
        return $this->SupplierRole;
    }

    public function addSupplierIdentifier(SupplierIdentifier $supplierIdentifier): static
    {
        $this->SupplierIdentifier[] = $supplierIdentifier;

        return $this;
    }

    public function getSupplierIdentifier(): array
    {
        return $this->SupplierIdentifier;
    }

    public function removeSupplierIdentifier(SupplierIdentifier $supplierIdentifier): static
    {
        $this->SupplierIdentifier = array_values(array_filter(
            $this->SupplierIdentifier,
            static fn ($item): bool => $item !== $supplierIdentifier,
        ));

        return $this;
    }

    public function setSupplierName(string $supplierName): static
    {
        $this->SupplierName = $supplierName;

        return $this;
    }

    public function getSupplierName(): ?string
    {
        return $this->SupplierName;
    }

    public function addTelephoneNumber(string $telephoneNumber): static
    {
        $this->TelephoneNumber[] = $telephoneNumber;

        return $this;
    }

    public function getTelephoneNumber(): array
    {
        return $this->TelephoneNumber;
    }

    public function removeTelephoneNumber(string $telephoneNumber): static
    {
        $this->TelephoneNumber = array_values(array_filter(
            $this->TelephoneNumber,
            static fn ($item): bool => $item !== $telephoneNumber,
        ));

        return $this;
    }

    public function addFaxNumber(string $faxNumber): static
    {
        $this->FaxNumber[] = $faxNumber;

        return $this;
    }

    public function getFaxNumber(): array
    {
        return $this->FaxNumber;
    }

    public function removeFaxNumber(string $faxNumber): static
    {
        $this->FaxNumber = array_values(array_filter(
            $this->FaxNumber,
            static fn ($item): bool => $item !== $faxNumber,
        ));

        return $this;
    }

    public function addEmailAddress(string $emailAddress): static
    {
        $this->EmailAddress[] = $emailAddress;

        return $this;
    }

    public function getEmailAddress(): array
    {
        return $this->EmailAddress;
    }

    public function removeEmailAddress(string $emailAddress): static
    {
        $this->EmailAddress = array_values(array_filter(
            $this->EmailAddress,
            static fn ($item): bool => $item !== $emailAddress,
        ));

        return $this;
    }

    public function addWebsite(Website $website): static
    {
        $this->Website[] = $website;

        return $this;
    }

    public function getWebsite(): array
    {
        return $this->Website;
    }

    public function removeWebsite(Website $website): static
    {
        $this->Website = array_values(array_filter(
            $this->Website,
            static fn ($item): bool => $item !== $website,
        ));

        return $this;
    }
}
