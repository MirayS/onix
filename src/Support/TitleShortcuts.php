<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

use MirayS\Onix\Product\TitleDetail;
use MirayS\Onix\Product\TitleElement;

trait TitleShortcuts
{
    public function getTitleDetailOfType(string ...$types): ?TitleDetail
    {
        foreach ($this->getTitleDetail() as $detail) {
            $type = $detail->getTitleType();

            if ($type !== null && $type->is(...$types)) {
                return $detail;
            }
        }

        return null;
    }

    public function getMainTitleElement(): ?TitleElement
    {
        $detail = $this->getTitleDetailOfType('01') ?? ($this->getTitleDetail()[0] ?? null);

        if ($detail === null) {
            return null;
        }

        foreach ($detail->getTitleElement() as $element) {
            $level = $element->getTitleElementLevel();

            if ($level === null || $level->is('01')) {
                return $element;
            }
        }

        return $detail->getTitleElement()[0] ?? null;
    }

    public function getTitle(): ?string
    {
        return $this->getMainTitleElement()?->getFullTitle();
    }

    public function getSubtitle(): ?string
    {
        return $this->getMainTitleElement()?->getSubtitleText();
    }

    public function getFullTitle(): ?string
    {
        $element = $this->getMainTitleElement();

        if ($element === null) {
            return null;
        }

        $title = $element->getFullTitle();
        $subtitle = $element->getSubtitleText();

        if ($title === null) {
            return $subtitle;
        }

        return $subtitle === null ? $title : $title . ': ' . $subtitle;
    }
}
