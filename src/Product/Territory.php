<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class Territory
{
    private ?string $CountriesIncluded = null;

    private ?string $RegionsIncluded = null;

    private ?string $RegionsExcluded = null;

    private ?string $CountriesExcluded = null;

    public function setCountriesIncluded(string $countriesIncluded): static
    {
        $this->CountriesIncluded = $countriesIncluded;

        return $this;
    }

    public function getCountriesIncluded(): ?string
    {
        return $this->CountriesIncluded;
    }

    public function setRegionsIncluded(string $regionsIncluded): static
    {
        $this->RegionsIncluded = $regionsIncluded;

        return $this;
    }

    public function getRegionsIncluded(): ?string
    {
        return $this->RegionsIncluded;
    }

    public function setRegionsExcluded(string $regionsExcluded): static
    {
        $this->RegionsExcluded = $regionsExcluded;

        return $this;
    }

    public function getRegionsExcluded(): ?string
    {
        return $this->RegionsExcluded;
    }

    public function setCountriesExcluded(string $countriesExcluded): static
    {
        $this->CountriesExcluded = $countriesExcluded;

        return $this;
    }

    public function getCountriesExcluded(): ?string
    {
        return $this->CountriesExcluded;
    }
}
