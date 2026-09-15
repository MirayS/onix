<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList121;
use MirayS\Onix\CodeList\CodeList22;
use MirayS\Onix\CodeList\CodeList49;
use MirayS\Onix\CodeList\CodeList74;
use MirayS\Onix\CodeList\CodeList91;

class Language
{
    private ?CodeList22 $LanguageRole = null;

    private ?CodeList74 $LanguageCode = null;

    private ?CodeList91 $CountryCode = null;

    private ?CodeList49 $RegionCode = null;

    private ?CodeList121 $ScriptCode = null;

    public function setLanguageRole(CodeList22 $languageRole): static
    {
        $this->LanguageRole = $languageRole;

        return $this;
    }

    public function getLanguageRole(): ?CodeList22
    {
        return $this->LanguageRole;
    }

    public function setLanguageCode(CodeList74 $languageCode): static
    {
        $this->LanguageCode = $languageCode;

        return $this;
    }

    public function getLanguageCode(): ?CodeList74
    {
        return $this->LanguageCode;
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

    public function setScriptCode(CodeList121 $scriptCode): static
    {
        $this->ScriptCode = $scriptCode;

        return $this;
    }

    public function getScriptCode(): ?CodeList121
    {
        return $this->ScriptCode;
    }
}
