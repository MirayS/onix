<?php

declare(strict_types=1);

namespace MirayS\Onix\Support;

trait MessageShortcuts
{
    private ?string $release = null;

    public function getProducts(): array
    {
        return $this->getProduct();
    }

    public function setRelease(?string $release): static
    {
        $this->release = $release;

        return $this;
    }

    public function getRelease(): ?string
    {
        return $this->release;
    }
}
