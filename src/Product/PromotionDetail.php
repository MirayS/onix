<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

class PromotionDetail
{
    private array $PromotionalEvent = [];

    public function addPromotionalEvent(PromotionalEvent $promotionalEvent): static
    {
        $this->PromotionalEvent[] = $promotionalEvent;

        return $this;
    }

    public function getPromotionalEvent(): array
    {
        return $this->PromotionalEvent;
    }

    public function removePromotionalEvent(PromotionalEvent $promotionalEvent): static
    {
        $this->PromotionalEvent = array_values(array_filter(
            $this->PromotionalEvent,
            static fn ($item): bool => $item !== $promotionalEvent,
        ));

        return $this;
    }
}
