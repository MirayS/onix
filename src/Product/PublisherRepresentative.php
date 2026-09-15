<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList69;

class PublisherRepresentative
{
    private ?CodeList69 $AgentRole = null;

    private array $AgentIdentifier = [];

    private ?string $AgentName = null;

    private array $TelephoneNumber = [];

    private array $FaxNumber = [];

    private array $EmailAddress = [];

    private array $Website = [];

    public function setAgentRole(CodeList69 $agentRole): static
    {
        $this->AgentRole = $agentRole;

        return $this;
    }

    public function getAgentRole(): ?CodeList69
    {
        return $this->AgentRole;
    }

    public function addAgentIdentifier(AgentIdentifier $agentIdentifier): static
    {
        $this->AgentIdentifier[] = $agentIdentifier;

        return $this;
    }

    public function getAgentIdentifier(): array
    {
        return $this->AgentIdentifier;
    }

    public function removeAgentIdentifier(AgentIdentifier $agentIdentifier): static
    {
        $this->AgentIdentifier = array_values(array_filter(
            $this->AgentIdentifier,
            static fn ($item): bool => $item !== $agentIdentifier,
        ));

        return $this;
    }

    public function setAgentName(string $agentName): static
    {
        $this->AgentName = $agentName;

        return $this;
    }

    public function getAgentName(): ?string
    {
        return $this->AgentName;
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
