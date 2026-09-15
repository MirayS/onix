<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\Date;
use MirayS\Onix\Text;

class Reissue
{
    private ?Date $ReissueDate = null;

    private ?Text $ReissueDescription = null;

    private array $Price = [];

    private array $SupportingResource = [];

    public function setReissueDate(Date $reissueDate): static
    {
        $this->ReissueDate = $reissueDate;

        return $this;
    }

    public function getReissueDate(): ?Date
    {
        return $this->ReissueDate;
    }

    public function setReissueDescription(Text $reissueDescription): static
    {
        $this->ReissueDescription = $reissueDescription;

        return $this;
    }

    public function getReissueDescription(): ?Text
    {
        return $this->ReissueDescription;
    }

    public function addPrice(Price $price): static
    {
        $this->Price[] = $price;

        return $this;
    }

    public function getPrice(): array
    {
        return $this->Price;
    }

    public function removePrice(Price $price): static
    {
        $this->Price = array_values(array_filter(
            $this->Price,
            static fn ($item): bool => $item !== $price,
        ));

        return $this;
    }

    public function addSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource[] = $supportingResource;

        return $this;
    }

    public function getSupportingResource(): array
    {
        return $this->SupportingResource;
    }

    public function removeSupportingResource(SupportingResource $supportingResource): static
    {
        $this->SupportingResource = array_values(array_filter(
            $this->SupportingResource,
            static fn ($item): bool => $item !== $supportingResource,
        ));

        return $this;
    }
}
