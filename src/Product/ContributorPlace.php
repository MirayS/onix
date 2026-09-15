<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList151;
use MirayS\Onix\CodeList\CodeList49;
use MirayS\Onix\CodeList\CodeList91;

class ContributorPlace
{
    private ?CodeList151 $ContributorPlaceRelator = null;

    private ?CodeList91 $CountryCode = null;

    private ?CodeList49 $RegionCode = null;

    private array $LocationName = [];

    public function setContributorPlaceRelator(CodeList151 $contributorPlaceRelator): static
    {
        $this->ContributorPlaceRelator = $contributorPlaceRelator;

        return $this;
    }

    public function getContributorPlaceRelator(): ?CodeList151
    {
        return $this->ContributorPlaceRelator;
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

    public function setRegionCode(CodeList49 $regionCode): static
    {
        $this->RegionCode = $regionCode;

        return $this;
    }

    public function getRegionCode(): ?CodeList49
    {
        return $this->RegionCode;
    }

    public function addLocationName(string $locationName): static
    {
        $this->LocationName[] = $locationName;

        return $this;
    }

    public function getLocationName(): array
    {
        return $this->LocationName;
    }

    public function removeLocationName(string $locationName): static
    {
        $this->LocationName = array_values(array_filter(
            $this->LocationName,
            static fn ($item): bool => $item !== $locationName,
        ));

        return $this;
    }
}
