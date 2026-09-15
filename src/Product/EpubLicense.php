<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class EpubLicense
{
    private array $EpubLicenseName = [];

    private array $EpubLicenseExpression = [];

    public function addEpubLicenseName(string $epubLicenseName): static
    {
        $this->EpubLicenseName[] = $epubLicenseName;

        return $this;
    }

    public function getEpubLicenseName(): array
    {
        return $this->EpubLicenseName;
    }

    public function removeEpubLicenseName(string $epubLicenseName): static
    {
        $this->EpubLicenseName = array_values(array_filter(
            $this->EpubLicenseName,
            static fn ($item): bool => $item !== $epubLicenseName,
        ));

        return $this;
    }

    public function addEpubLicenseExpression(EpubLicenseExpression $epubLicenseExpression): static
    {
        $this->EpubLicenseExpression[] = $epubLicenseExpression;

        return $this;
    }

    public function getEpubLicenseExpression(): array
    {
        return $this->EpubLicenseExpression;
    }

    public function removeEpubLicenseExpression(EpubLicenseExpression $epubLicenseExpression): static
    {
        $this->EpubLicenseExpression = array_values(array_filter(
            $this->EpubLicenseExpression,
            static fn ($item): bool => $item !== $epubLicenseExpression,
        ));

        return $this;
    }
}
