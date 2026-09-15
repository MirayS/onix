<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList73;
use MirayS\Onix\Text;

class Website
{
    private ?CodeList73 $WebsiteRole = null;

    private array $WebsiteDescription = [];

    private array $WebsiteLink = [];

    public function setWebsiteRole(CodeList73 $websiteRole): static
    {
        $this->WebsiteRole = $websiteRole;

        return $this;
    }

    public function getWebsiteRole(): ?CodeList73
    {
        return $this->WebsiteRole;
    }

    public function addWebsiteDescription(Text $websiteDescription): static
    {
        $this->WebsiteDescription[] = $websiteDescription;

        return $this;
    }

    public function getWebsiteDescription(): array
    {
        return $this->WebsiteDescription;
    }

    public function removeWebsiteDescription(Text $websiteDescription): static
    {
        $this->WebsiteDescription = array_values(array_filter(
            $this->WebsiteDescription,
            static fn ($item): bool => $item !== $websiteDescription,
        ));

        return $this;
    }

    public function addWebsiteLink(string $websiteLink): static
    {
        $this->WebsiteLink[] = $websiteLink;

        return $this;
    }

    public function getWebsiteLink(): array
    {
        return $this->WebsiteLink;
    }

    public function removeWebsiteLink(string $websiteLink): static
    {
        $this->WebsiteLink = array_values(array_filter(
            $this->WebsiteLink,
            static fn ($item): bool => $item !== $websiteLink,
        ));

        return $this;
    }
}
