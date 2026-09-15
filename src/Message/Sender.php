<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

class Sender
{
    private array $SenderIdentifier = [];

    private ?string $SenderName = null;

    private ?string $ContactName = null;

    private ?string $TelephoneNumber = null;

    private ?string $EmailAddress = null;

    public function addSenderIdentifier(SenderIdentifier $senderIdentifier): static
    {
        $this->SenderIdentifier[] = $senderIdentifier;

        return $this;
    }

    public function getSenderIdentifier(): array
    {
        return $this->SenderIdentifier;
    }

    public function removeSenderIdentifier(SenderIdentifier $senderIdentifier): static
    {
        $this->SenderIdentifier = array_values(array_filter(
            $this->SenderIdentifier,
            static fn ($item): bool => $item !== $senderIdentifier,
        ));

        return $this;
    }

    public function setSenderName(string $senderName): static
    {
        $this->SenderName = $senderName;

        return $this;
    }

    public function getSenderName(): ?string
    {
        return $this->SenderName;
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
