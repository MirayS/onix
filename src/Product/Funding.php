<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class Funding
{
    private array $FundingIdentifier = [];

    public function addFundingIdentifier(FundingIdentifier $fundingIdentifier): static
    {
        $this->FundingIdentifier[] = $fundingIdentifier;

        return $this;
    }

    public function getFundingIdentifier(): array
    {
        return $this->FundingIdentifier;
    }

    public function removeFundingIdentifier(FundingIdentifier $fundingIdentifier): static
    {
        $this->FundingIdentifier = array_values(array_filter(
            $this->FundingIdentifier,
            static fn ($item): bool => $item !== $fundingIdentifier,
        ));

        return $this;
    }
}
