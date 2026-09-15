<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

class Addressee
{
    private array $AddresseeIdentifier = [];

    private ?string $AddresseeName = null;

    private ?string $ContactName = null;

    private ?string $TelephoneNumber = null;

    private ?string $EmailAddress = null;

    public function addAddresseeIdentifier(AddresseeIdentifier $addresseeIdentifier): static
    {
        $this->AddresseeIdentifier[] = $addresseeIdentifier;

        return $this;
    }

    public function getAddresseeIdentifier(): array
    {
        return $this->AddresseeIdentifier;
    }

    public function removeAddresseeIdentifier(AddresseeIdentifier $addresseeIdentifier): static
    {
        $this->AddresseeIdentifier = array_values(array_filter(
            $this->AddresseeIdentifier,
            static fn ($item): bool => $item !== $addresseeIdentifier,
        ));

        return $this;
    }

    public function setAddresseeName(string $addresseeName): static
    {
        $this->AddresseeName = $addresseeName;

        return $this;
    }

    public function getAddresseeName(): ?string
    {
        return $this->AddresseeName;
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

    public function setTelephoneNumber(string $telephoneNumber): static
    {
        $this->TelephoneNumber = $telephoneNumber;

        return $this;
    }

    public function getTelephoneNumber(): ?string
    {
        return $this->TelephoneNumber;
    }

    public function setEmailAddress(string $emailAddress): static
    {
        $this->EmailAddress = $emailAddress;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
}
