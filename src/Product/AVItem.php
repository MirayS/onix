<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList240;

class AVItem
{
    private ?CodeList240 $AVItemType = null;

    private array $AVItemIdentifier = [];

    private array $TimeRun = [];

    private ?string $AVDuration = null;

    public function setAVItemType(CodeList240 $aVItemType): static
    {
        $this->AVItemType = $aVItemType;

        return $this;
    }

    public function getAVItemType(): ?CodeList240
    {
        return $this->AVItemType;
    }

    public function addAVItemIdentifier(AVItemIdentifier $aVItemIdentifier): static
    {
        $this->AVItemIdentifier[] = $aVItemIdentifier;

        return $this;
    }

    public function getAVItemIdentifier(): array
    {
        return $this->AVItemIdentifier;
    }

    public function removeAVItemIdentifier(AVItemIdentifier $aVItemIdentifier): static
    {
        $this->AVItemIdentifier = array_values(array_filter(
            $this->AVItemIdentifier,
            static fn ($item): bool => $item !== $aVItemIdentifier,
        ));

        return $this;
    }

    public function addTimeRun(TimeRun $timeRun): static
    {
        $this->TimeRun[] = $timeRun;

        return $this;
    }

    public function getTimeRun(): array
    {
        return $this->TimeRun;
    }

    public function removeTimeRun(TimeRun $timeRun): static
    {
        $this->TimeRun = array_values(array_filter(
            $this->TimeRun,
            static fn ($item): bool => $item !== $timeRun,
        ));

        return $this;
    }

    public function setAVDuration(string $aVDuration): static
    {
        $this->AVDuration = $aVDuration;

        return $this;
    }

    public function getAVDuration(): ?string
    {
        return $this->AVDuration;
    }
}
