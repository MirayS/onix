<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList30;
use MirayS\Onix\CodeList\CodeList31;

class AudienceRange
{
    private ?CodeList30 $AudienceRangeQualifier = null;

    private ?CodeList31 $AudienceRangePrecision = null;

    private ?string $AudienceRangeValue = null;

    public function setAudienceRangeQualifier(CodeList30 $audienceRangeQualifier): static
    {
        $this->AudienceRangeQualifier = $audienceRangeQualifier;

        return $this;
    }

    public function getAudienceRangeQualifier(): ?CodeList30
    {
        return $this->AudienceRangeQualifier;
    }

    public function setAudienceRangePrecision(CodeList31 $audienceRangePrecision): static
    {
        $this->AudienceRangePrecision = $audienceRangePrecision;

        return $this;
    }

    public function getAudienceRangePrecision(): ?CodeList31
    {
        return $this->AudienceRangePrecision;
    }

    public function setAudienceRangeValue(string $audienceRangeValue): static
    {
        $this->AudienceRangeValue = $audienceRangeValue;

        return $this;
    }

    public function getAudienceRangeValue(): ?string
    {
        return $this->AudienceRangeValue;
    }
}
