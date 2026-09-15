<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class TimeRun
{
    private ?string $StartTime = null;

    private ?string $EndTime = null;

    public function setStartTime(string $startTime): static
    {
        $this->StartTime = $startTime;

        return $this;
    }

    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }

    public function setEndTime(string $endTime): static
    {
        $this->EndTime = $endTime;

        return $this;
    }

    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
}
