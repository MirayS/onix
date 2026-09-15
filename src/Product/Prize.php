<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList41;
use MirayS\Onix\CodeList\CodeList49;
use MirayS\Onix\CodeList\CodeList91;
use MirayS\Onix\Text;

class Prize
{
    private ?int $SequenceNumber = null;

    private array $PrizeIdentifier = [];

    private array $PrizeName = [];

    private ?int $PrizeYear = null;

    private array $AwardingBody = [];

    private ?CodeList91 $PrizeCountry = null;

    private ?CodeList49 $PrizeRegion = null;

    private ?CodeList41 $PrizeCode = null;

    private array $PrizeStatement = [];

    private array $PrizeJury = [];

    public function setSequenceNumber(int $sequenceNumber): static
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }

    public function addPrizeIdentifier(PrizeIdentifier $prizeIdentifier): static
    {
        $this->PrizeIdentifier[] = $prizeIdentifier;

        return $this;
    }

    public function getPrizeIdentifier(): array
    {
        return $this->PrizeIdentifier;
    }

    public function removePrizeIdentifier(PrizeIdentifier $prizeIdentifier): static
    {
        $this->PrizeIdentifier = array_values(array_filter(
            $this->PrizeIdentifier,
            static fn ($item): bool => $item !== $prizeIdentifier,
        ));

        return $this;
    }

    public function addPrizeName(string $prizeName): static
    {
        $this->PrizeName[] = $prizeName;

        return $this;
    }

    public function getPrizeName(): array
    {
        return $this->PrizeName;
    }

    public function removePrizeName(string $prizeName): static
    {
        $this->PrizeName = array_values(array_filter(
            $this->PrizeName,
            static fn ($item): bool => $item !== $prizeName,
        ));

        return $this;
    }

    public function setPrizeYear(int $prizeYear): static
    {
        $this->PrizeYear = $prizeYear;

        return $this;
    }

    public function getPrizeYear(): ?int
    {
        return $this->PrizeYear;
    }

    public function addAwardingBody(string $awardingBody): static
    {
        $this->AwardingBody[] = $awardingBody;

        return $this;
    }

    public function getAwardingBody(): array
    {
        return $this->AwardingBody;
    }

    public function removeAwardingBody(string $awardingBody): static
    {
        $this->AwardingBody = array_values(array_filter(
            $this->AwardingBody,
            static fn ($item): bool => $item !== $awardingBody,
        ));

        return $this;
    }

    public function setPrizeCountry(CodeList91 $prizeCountry): static
    {
        $this->PrizeCountry = $prizeCountry;

        return $this;
    }

    public function getPrizeCountry(): ?CodeList91
    {
        return $this->PrizeCountry;
    }

    public function setPrizeRegion(CodeList49 $prizeRegion): static
    {
        $this->PrizeRegion = $prizeRegion;

        return $this;
    }

    public function getPrizeRegion(): ?CodeList49
    {
        return $this->PrizeRegion;
    }

    public function setPrizeCode(CodeList41 $prizeCode): static
    {
        $this->PrizeCode = $prizeCode;

        return $this;
    }

    public function getPrizeCode(): ?CodeList41
    {
        return $this->PrizeCode;
    }

    public function addPrizeStatement(Text $prizeStatement): static
    {
        $this->PrizeStatement[] = $prizeStatement;

        return $this;
    }

    public function getPrizeStatement(): array
    {
        return $this->PrizeStatement;
    }

    public function removePrizeStatement(Text $prizeStatement): static
    {
        $this->PrizeStatement = array_values(array_filter(
            $this->PrizeStatement,
            static fn ($item): bool => $item !== $prizeStatement,
        ));

        return $this;
    }

    public function addPrizeJury(Text $prizeJury): static
    {
        $this->PrizeJury[] = $prizeJury;

        return $this;
    }

    public function getPrizeJury(): array
    {
        return $this->PrizeJury;
    }

    public function removePrizeJury(Text $prizeJury): static
    {
        $this->PrizeJury = array_values(array_filter(
            $this->PrizeJury,
            static fn ($item): bool => $item !== $prizeJury,
        ));

        return $this;
    }
}
