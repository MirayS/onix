<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList68;
use MirayS\Onix\Text;

class MarketPublishingDetail
{
    private array $PublisherRepresentative = [];

    private array $ProductContact = [];

    private ?CodeList68 $MarketPublishingStatus = null;

    private array $MarketPublishingStatusNote = [];

    private array $MarketDate = [];

    private array $PromotionCampaign = [];

    private array $InitialPrintRun = [];

    private array $ReprintDetail = [];

    private array $CopiesSold = [];

    private array $BookClubAdoption = [];

    public function addPublisherRepresentative(PublisherRepresentative $publisherRepresentative): static
    {
        $this->PublisherRepresentative[] = $publisherRepresentative;

        return $this;
    }

    public function getPublisherRepresentative(): array
    {
        return $this->PublisherRepresentative;
    }

    public function removePublisherRepresentative(PublisherRepresentative $publisherRepresentative): static
    {
        $this->PublisherRepresentative = array_values(array_filter(
            $this->PublisherRepresentative,
            static fn ($item): bool => $item !== $publisherRepresentative,
        ));

        return $this;
    }

    public function addProductContact(ProductContact $productContact): static
    {
        $this->ProductContact[] = $productContact;

        return $this;
    }

    public function getProductContact(): array
    {
        return $this->ProductContact;
    }

    public function removeProductContact(ProductContact $productContact): static
    {
        $this->ProductContact = array_values(array_filter(
            $this->ProductContact,
            static fn ($item): bool => $item !== $productContact,
        ));

        return $this;
    }

    public function setMarketPublishingStatus(CodeList68 $marketPublishingStatus): static
    {
        $this->MarketPublishingStatus = $marketPublishingStatus;

        return $this;
    }

    public function getMarketPublishingStatus(): ?CodeList68
    {
        return $this->MarketPublishingStatus;
    }

    public function addMarketPublishingStatusNote(Text $marketPublishingStatusNote): static
    {
        $this->MarketPublishingStatusNote[] = $marketPublishingStatusNote;

        return $this;
    }

    public function getMarketPublishingStatusNote(): array
    {
        return $this->MarketPublishingStatusNote;
    }

    public function removeMarketPublishingStatusNote(Text $marketPublishingStatusNote): static
    {
        $this->MarketPublishingStatusNote = array_values(array_filter(
            $this->MarketPublishingStatusNote,
            static fn ($item): bool => $item !== $marketPublishingStatusNote,
        ));

        return $this;
    }

    public function addMarketDate(MarketDate $marketDate): static
    {
        $this->MarketDate[] = $marketDate;

        return $this;
    }

    public function getMarketDate(): array
    {
        return $this->MarketDate;
    }

    public function removeMarketDate(MarketDate $marketDate): static
    {
        $this->MarketDate = array_values(array_filter(
            $this->MarketDate,
            static fn ($item): bool => $item !== $marketDate,
        ));

        return $this;
    }

    public function addPromotionCampaign(Text $promotionCampaign): static
    {
        $this->PromotionCampaign[] = $promotionCampaign;

        return $this;
    }

    public function getPromotionCampaign(): array
    {
        return $this->PromotionCampaign;
    }

    public function removePromotionCampaign(Text $promotionCampaign): static
    {
        $this->PromotionCampaign = array_values(array_filter(
            $this->PromotionCampaign,
            static fn ($item): bool => $item !== $promotionCampaign,
        ));

        return $this;
    }

    public function addInitialPrintRun(Text $initialPrintRun): static
    {
        $this->InitialPrintRun[] = $initialPrintRun;

        return $this;
    }

    public function getInitialPrintRun(): array
    {
        return $this->InitialPrintRun;
    }

    public function removeInitialPrintRun(Text $initialPrintRun): static
    {
        $this->InitialPrintRun = array_values(array_filter(
            $this->InitialPrintRun,
            static fn ($item): bool => $item !== $initialPrintRun,
        ));

        return $this;
    }

    public function addReprintDetail(Text $reprintDetail): static
    {
        $this->ReprintDetail[] = $reprintDetail;

        return $this;
    }

    public function getReprintDetail(): array
    {
        return $this->ReprintDetail;
    }

    public function removeReprintDetail(Text $reprintDetail): static
    {
        $this->ReprintDetail = array_values(array_filter(
            $this->ReprintDetail,
            static fn ($item): bool => $item !== $reprintDetail,
        ));

        return $this;
    }

    public function addCopiesSold(Text $copiesSold): static
    {
        $this->CopiesSold[] = $copiesSold;

        return $this;
    }

    public function getCopiesSold(): array
    {
        return $this->CopiesSold;
    }

    public function removeCopiesSold(Text $copiesSold): static
    {
        $this->CopiesSold = array_values(array_filter(
            $this->CopiesSold,
            static fn ($item): bool => $item !== $copiesSold,
        ));

        return $this;
    }

    public function addBookClubAdoption(Text $bookClubAdoption): static
    {
        $this->BookClubAdoption[] = $bookClubAdoption;

        return $this;
    }

    public function getBookClubAdoption(): array
    {
        return $this->BookClubAdoption;
    }

    public function removeBookClubAdoption(Text $bookClubAdoption): static
    {
        $this->BookClubAdoption = array_values(array_filter(
            $this->BookClubAdoption,
            static fn ($item): bool => $item !== $bookClubAdoption,
        ));

        return $this;
    }
}
