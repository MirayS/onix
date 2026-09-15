<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList218;

class EpubLicenseExpression
{
    private ?CodeList218 $EpubLicenseExpressionType = null;

    private ?string $EpubLicenseExpressionTypeName = null;

    private ?string $EpubLicenseExpressionLink = null;

    public function setEpubLicenseExpressionType(CodeList218 $epubLicenseExpressionType): static
    {
        $this->EpubLicenseExpressionType = $epubLicenseExpressionType;

        return $this;
    }

    public function getEpubLicenseExpressionType(): ?CodeList218
    {
        return $this->EpubLicenseExpressionType;
    }

    public function setEpubLicenseExpressionTypeName(string $epubLicenseExpressionTypeName): static
    {
        $this->EpubLicenseExpressionTypeName = $epubLicenseExpressionTypeName;

        return $this;
    }

    public function getEpubLicenseExpressionTypeName(): ?string
    {
        return $this->EpubLicenseExpressionTypeName;
    }

    public function setEpubLicenseExpressionLink(string $epubLicenseExpressionLink): static
    {
        $this->EpubLicenseExpressionLink = $epubLicenseExpressionLink;

        return $this;
    }

    public function getEpubLicenseExpressionLink(): ?string
    {
        return $this->EpubLicenseExpressionLink;
    }
}
