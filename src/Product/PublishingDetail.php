<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList46;
use MirayS\Onix\CodeList\CodeList64;
use MirayS\Onix\CodeList\CodeList91;
use MirayS\Onix\Text;

class PublishingDetail
{
    private array $Imprint = [];

    private array $Publisher = [];

    private array $CityOfPublication = [];

    private ?CodeList91 $CountryOfPublication = null;

    private array $ProductContact = [];

    private ?CodeList64 $PublishingStatus = null;

    private array $PublishingStatusNote = [];

    private array $PublishingDate = [];

    private ?int $LatestReprintNumber = null;

    private array $CopyrightStatement = [];

    private array $CopyrightStatementText = [];

    private array $SalesRights = [];

    private ?CodeList46 $ROWSalesRightsType = null;

    public function addImprint(Imprint $imprint): static
    {
        $this->Imprint[] = $imprint;

        return $this;
    }

    public function getImprint(): array
    {
        return $this->Imprint;
    }

    public function removeImprint(Imprint $imprint): static
    {
        $this->Imprint = array_values(array_filter(
            $this->Imprint,
            static fn ($item): bool => $item !== $imprint,
        ));

        return $this;
    }

    public function addPublisher(Publisher $publisher): static
    {
        $this->Publisher[] = $publisher;

        return $this;
    }

    public function getPublisher(): array
    {
        return $this->Publisher;
    }

    public function removePublisher(Publisher $publisher): static
    {
        $this->Publisher = array_values(array_filter(
            $this->Publisher,
            static fn ($item): bool => $item !== $publisher,
        ));

        return $this;
    }

    public function addCityOfPublication(string $cityOfPublication): static
    {
        $this->CityOfPublication[] = $cityOfPublication;

        return $this;
    }

    public function getCityOfPublication(): array
    {
        return $this->CityOfPublication;
    }

    public function removeCityOfPublication(string $cityOfPublication): static
    {
        $this->CityOfPublication = array_values(array_filter(
            $this->CityOfPublication,
            static fn ($item): bool => $item !== $cityOfPublication,
        ));

        return $this;
    }

    public function setCountryOfPublication(CodeList91 $countryOfPublication): static
    {
        $this->CountryOfPublication = $countryOfPublication;

        return $this;
    }

    public function getCountryOfPublication(): ?CodeList91
    {
        return $this->CountryOfPublication;
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

    public function setPublishingStatus(CodeList64 $publishingStatus): static
    {
        $this->PublishingStatus = $publishingStatus;

        return $this;
    }

    public function getPublishingStatus(): ?CodeList64
    {
        return $this->PublishingStatus;
    }

    public function addPublishingStatusNote(Text $publishingStatusNote): static
    {
        $this->PublishingStatusNote[] = $publishingStatusNote;

        return $this;
    }

    public function getPublishingStatusNote(): array
    {
        return $this->PublishingStatusNote;
    }

    public function removePublishingStatusNote(Text $publishingStatusNote): static
    {
        $this->PublishingStatusNote = array_values(array_filter(
            $this->PublishingStatusNote,
            static fn ($item): bool => $item !== $publishingStatusNote,
        ));

        return $this;
    }

    public function addPublishingDate(PublishingDate $publishingDate): static
    {
        $this->PublishingDate[] = $publishingDate;

        return $this;
    }

    public function getPublishingDate(): array
    {
        return $this->PublishingDate;
    }

    public function removePublishingDate(PublishingDate $publishingDate): static
    {
        $this->PublishingDate = array_values(array_filter(
            $this->PublishingDate,
            static fn ($item): bool => $item !== $publishingDate,
        ));

        return $this;
    }

    public function setLatestReprintNumber(int $latestReprintNumber): static
    {
        $this->LatestReprintNumber = $latestReprintNumber;

        return $this;
    }

    public function getLatestReprintNumber(): ?int
    {
        return $this->LatestReprintNumber;
    }

    public function addCopyrightStatement(CopyrightStatement $copyrightStatement): static
    {
        $this->CopyrightStatement[] = $copyrightStatement;

        return $this;
    }

    public function getCopyrightStatement(): array
    {
        return $this->CopyrightStatement;
    }

    public function removeCopyrightStatement(CopyrightStatement $copyrightStatement): static
    {
        $this->CopyrightStatement = array_values(array_filter(
            $this->CopyrightStatement,
            static fn ($item): bool => $item !== $copyrightStatement,
        ));

        return $this;
    }

    public function addCopyrightStatementText(Text $copyrightStatementText): static
    {
        $this->CopyrightStatementText[] = $copyrightStatementText;

        return $this;
    }

    public function getCopyrightStatementText(): array
    {
        return $this->CopyrightStatementText;
    }

    public function removeCopyrightStatementText(Text $copyrightStatementText): static
    {
        $this->CopyrightStatementText = array_values(array_filter(
            $this->CopyrightStatementText,
            static fn ($item): bool => $item !== $copyrightStatementText,
        ));

        return $this;
    }

    public function addSalesRights(SalesRights $salesRights): static
    {
        $this->SalesRights[] = $salesRights;

        return $this;
    }

    public function getSalesRights(): array
    {
        return $this->SalesRights;
    }

    public function removeSalesRights(SalesRights $salesRights): static
    {
        $this->SalesRights = array_values(array_filter(
            $this->SalesRights,
            static fn ($item): bool => $item !== $salesRights,
        ));

        return $this;
    }

    public function setROWSalesRightsType(CodeList46 $rOWSalesRightsType): static
    {
        $this->ROWSalesRightsType = $rOWSalesRightsType;

        return $this;
    }

    public function getROWSalesRightsType(): ?CodeList46
    {
        return $this->ROWSalesRightsType;
    }
}
