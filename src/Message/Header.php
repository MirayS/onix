<?php

declare(strict_types=1);

namespace MirayS\Onix\Message;

use MirayS\Onix\CodeList\CodeList58;
use MirayS\Onix\CodeList\CodeList74;
use MirayS\Onix\CodeList\CodeList96;

class Header
{
    private ?Sender $Sender = null;

    private array $Addressee = [];

    private ?int $MessageNumber = null;

    private ?int $MessageRepeat = null;

    private ?string $SentDateTime = null;

    private array $MessageNote = [];

    private ?CodeList74 $DefaultLanguageOfText = null;

    private ?CodeList58 $DefaultPriceType = null;

    private ?CodeList96 $DefaultCurrencyCode = null;

    public function setSender(Sender $sender): static
    {
        $this->Sender = $sender;

        return $this;
    }

    public function getSender(): ?Sender
    {
        return $this->Sender;
    }

    public function addAddressee(Addressee $addressee): static
    {
        $this->Addressee[] = $addressee;

        return $this;
    }

    public function getAddressee(): array
    {
        return $this->Addressee;
    }

    public function removeAddressee(Addressee $addressee): static
    {
        $this->Addressee = array_values(array_filter(
            $this->Addressee,
            static fn ($item): bool => $item !== $addressee,
        ));

        return $this;
    }

    public function setMessageNumber(int $messageNumber): static
    {
        $this->MessageNumber = $messageNumber;

        return $this;
    }

    public function getMessageNumber(): ?int
    {
        return $this->MessageNumber;
    }

    public function setMessageRepeat(int $messageRepeat): static
    {
        $this->MessageRepeat = $messageRepeat;

        return $this;
    }

    public function getMessageRepeat(): ?int
    {
        return $this->MessageRepeat;
    }

    public function setSentDateTime(string $sentDateTime): static
    {
        $this->SentDateTime = $sentDateTime;

        return $this;
    }

    public function getSentDateTime(): ?string
    {
        return $this->SentDateTime;
    }

    public function addMessageNote(string $messageNote): static
    {
        $this->MessageNote[] = $messageNote;

        return $this;
    }

    public function getMessageNote(): array
    {
        return $this->MessageNote;
    }

    public function removeMessageNote(string $messageNote): static
    {
        $this->MessageNote = array_values(array_filter(
            $this->MessageNote,
            static fn ($item): bool => $item !== $messageNote,
        ));

        return $this;
    }

    public function setDefaultLanguageOfText(CodeList74 $defaultLanguageOfText): static
    {
        $this->DefaultLanguageOfText = $defaultLanguageOfText;

        return $this;
    }

    public function getDefaultLanguageOfText(): ?CodeList74
    {
        return $this->DefaultLanguageOfText;
    }

    public function setDefaultPriceType(CodeList58 $defaultPriceType): static
    {
        $this->DefaultPriceType = $defaultPriceType;

        return $this;
    }

    public function getDefaultPriceType(): ?CodeList58
    {
        return $this->DefaultPriceType;
    }

    public function setDefaultCurrencyCode(CodeList96 $defaultCurrencyCode): static
    {
        $this->DefaultCurrencyCode = $defaultCurrencyCode;

        return $this;
    }

    public function getDefaultCurrencyCode(): ?CodeList96
    {
        return $this->DefaultCurrencyCode;
    }
}
