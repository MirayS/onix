<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\Support\CollateralShortcuts;

class CollateralDetail
{
    use CollateralShortcuts;

    private array $TextContent = [];

    private array $CitedContent = [];

    private array $SupportingResource = [];

    private array $Prize = [];

    public function addTextContent(TextContent $textContent): static
    {
        $this->TextContent[] = $textContent;

        return $this;
    }

    public function getTextContent(): array
    {
        return $this->TextContent;
    }

    public function removeTextContent(TextContent $textContent): static
    {
        $this->TextContent = array_values(array_filter(
            $this->TextContent,
            static fn ($item): bool => $item !== $textContent,
        ));

        return $this;
    }

    public function addCitedContent(CitedContent $citedContent): static
    {
        $this->CitedContent[] = $citedContent;

        return $this;
    }

    public function getCitedContent(): array
    {
        return $this->CitedContent;
    }

    public function removeCitedContent(CitedContent $citedContent): static
    {
        $this->CitedContent = array_values(array_filter(
            $this->CitedContent,
            static fn ($item): bool => $item !== $citedContent,
        ));

        return $this;
    }

    public function addSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource[] = $supportingResource;

        return $this;
    }

    public function getSupportingResource(): array
    {
        return $this->SupportingResource;
    }

    public function removeSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource = array_values(array_filter(
            $this->SupportingResource,
            static fn ($item): bool => $item !== $supportingResource,
        ));

        return $this;
    }

    public function addPrize(Prize $prize): static
    {
        $this->Prize[] = $prize;

        return $this;
    }

    public function getPrize(): array
    {
        return $this->Prize;
    }

    public function removePrize(Prize $prize): static
    {
        $this->Prize = array_values(array_filter(
            $this->Prize,
            static fn ($item): bool => $item !== $prize,
        ));

        return $this;
    }
}
