<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class ContentDetail
{
    private array $ContentItem = [];

    public function addContentItem(ContentItem $contentItem): static
    {
        $this->ContentItem[] = $contentItem;

        return $this;
    }

    public function getContentItem(): array
    {
        return $this->ContentItem;
    }

    public function removeContentItem(ContentItem $contentItem): static
    {
        $this->ContentItem = array_values(array_filter(
            $this->ContentItem,
            static fn ($item): bool => $item !== $contentItem,
        ));

        return $this;
    }
}
