<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

use MirayS\Onix\Product\Measure;

trait MeasureShortcuts
{
    public function getMeasureOfType(string ...$types): ?Measure
    {
        foreach ($this->getMeasure() as $measure) {
            $type = $measure->getMeasureType();

            if ($type !== null && $type->is(...$types)) {
                return $measure;
            }
        }

        return null;
    }

    public function getHeight(): ?Measure
    {
        return $this->getMeasureOfType('01');
    }

    public function getWidth(): ?Measure
    {
        return $this->getMeasureOfType('02');
    }

    public function getThickness(): ?Measure
    {
        return $this->getMeasureOfType('03');
    }

    public function getWeight(): ?Measure
    {
        return $this->getMeasureOfType('08');
    }

    public function getPageCount(): ?int
    {
        foreach ($this->getExtent() as $extent) {
            $type = $extent->getExtentType();

            if ($type !== null && $type->is('00', '04', '11') && $extent->getExtentValue() !== null) {
                return (int) $extent->getExtentValue();
            }
        }

        return null;
    }
}
