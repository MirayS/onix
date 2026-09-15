<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

use MirayS\Onix\Product\TextContent;

trait CollateralShortcuts
{
    public function getTextContentOfType(string ...$types): ?TextContent
    {
        foreach ($this->getTextContent() as $content) {
            $type = $content->getTextType();

            if ($type !== null && $type->is(...$types)) {
                return $content;
            }
        }

        return null;
    }

    public function getDescriptionText(): ?string
    {
        $text = Value::first($this->getTextContentOfType('03', '02', '01')?->getText());

        return $text?->toPlain();
    }

    public function getCoverImageUrl(): ?string
    {
        foreach ($this->getSupportingResource() as $resource) {
            $type = $resource->getResourceContentType();

            if ($type === null || !$type->is('01')) {
                continue;
            }

            foreach ($resource->getResourceVersion() as $version) {
                $link = Value::firstString($version->getResourceLink());

                if ($link !== null) {
                    return $link;
                }
            }
        }

        return null;
    }
}
