<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList198;
use MirayS\Onix\CodeList\CodeList49;
use MirayS\Onix\CodeList\CodeList91;

class ProductContact
{
    private ?CodeList198 $ProductContactRole = null;

    private array $ProductContactIdentifier = [];

    private ?string $ProductContactName = null;

    private ?string $ContactName = null;

    private array $TelephoneNumber = [];

    private array $FaxNumber = [];

    private array $EmailAddress = [];

    private ?string $StreetAddress = null;

    private ?string $LocationName = null;

    private ?string $PostalCode = null;

    private ?CodeList49 $RegionCode = null;

    private ?CodeList91 $CountryCode = null;

    public function setProductContactRole(CodeList198 $productContactRole): static
    {
        $this->ProductContactRole = $productContactRole;

        return $this;
    }

    public function getProductContactRole(): ?CodeList198
    {
        return $this->ProductContactRole;
    }

    public function addProductContactIdentifier(ProductContactIdentifier $productContactIdentifier): static
    {
        $this->ProductContactIdentifier[] = $productContactIdentifier;

        return $this;
    }

    public function getProductContactIdentifier(): array
    {
        return $this->ProductContactIdentifier;
    }

    public function removeProductContactIdentifier(ProductContactIdentifier $productContactIdentifier): static
    {
        $this->ProductContactIdentifier = array_values(array_filter(
            $this->ProductContactIdentifier,
            static fn ($item): bool => $item !== $productContactIdentifier,
        ));

        return $this;
    }

    public function setProductContactName(string $productContactName): static
    {
        $this->ProductContactName = $productContactName;

        return $this;
    }

    public function getProductContactName(): ?string
    {
        return $this->ProductContactName;
    }

    public function setContactName(string $contactName): static
    {
        $this->ContactName = $contactName;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->ContactName;
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

    public function setStreetAddress(string $streetAddress): static
    {
        $this->StreetAddress = $streetAddress;

        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->StreetAddress;
    }

    public function setLocationName(string $locationName): static
    {
        $this->LocationName = $locationName;

        return $this;
    }

    public function getLocationName(): ?string
    {
        return $this->LocationName;
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->PostalCode = $postalCode;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    public function setRegionCode(CodeList49 $regionCode): static
    {
        $this->RegionCode = $regionCode;

        return $this;
    }

    public function getRegionCode(): ?CodeList49
    {
        return $this->RegionCode;
    }

    public function setCountryCode(CodeList91 $countryCode): static
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    public function getCountryCode(): ?CodeList91
    {
        return $this->CountryCode;
    }
}
