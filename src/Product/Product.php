<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList1;
use MirayS\Onix\CodeList\CodeList3;
use MirayS\Onix\Support\ProductShortcuts;

class Product
{
    use ProductShortcuts;

    private ?string $RecordReference = null;

    private ?CodeList1 $NotificationType = null;

    private array $DeletionText = [];

    private ?CodeList3 $RecordSourceType = null;

    private array $RecordSourceIdentifier = [];

    private ?string $RecordSourceName = null;

    private array $ProductIdentifier = [];

    private array $Barcode = [];

    private ?DescriptiveDetail $DescriptiveDetail = null;

    private ?CollateralDetail $CollateralDetail = null;

    private ?PromotionDetail $PromotionDetail = null;

    private ?ContentDetail $ContentDetail = null;

    private ?PublishingDetail $PublishingDetail = null;

    private ?RelatedMaterial $RelatedMaterial = null;

    private ?ProductionDetail $ProductionDetail = null;

    private array $ProductSupply = [];

    public function setRecordReference(string $recordReference): static
    {
        $this->RecordReference = $recordReference;

        return $this;
    }

    public function getRecordReference(): ?string
    {
        return $this->RecordReference;
    }

    public function setNotificationType(CodeList1 $notificationType): static
    {
        $this->NotificationType = $notificationType;

        return $this;
    }

    public function getNotificationType(): ?CodeList1
    {
        return $this->NotificationType;
    }

    public function addDeletionText(string $deletionText): static
    {
        $this->DeletionText[] = $deletionText;

        return $this;
    }

    public function getDeletionText(): array
    {
        return $this->DeletionText;
    }

    public function removeDeletionText(string $deletionText): static
    {
        $this->DeletionText = array_values(array_filter(
            $this->DeletionText,
            static fn ($item): bool => $item !== $deletionText,
        ));

        return $this;
    }

    public function setRecordSourceType(CodeList3 $recordSourceType): static
    {
        $this->RecordSourceType = $recordSourceType;

        return $this;
    }

    public function getRecordSourceType(): ?CodeList3
    {
        return $this->RecordSourceType;
    }

    public function addRecordSourceIdentifier(RecordSourceIdentifier $recordSourceIdentifier): static
    {
        $this->RecordSourceIdentifier[] = $recordSourceIdentifier;

        return $this;
    }

    public function getRecordSourceIdentifier(): array
    {
        return $this->RecordSourceIdentifier;
    }

    public function removeRecordSourceIdentifier(RecordSourceIdentifier $recordSourceIdentifier): static
    {
        $this->RecordSourceIdentifier = array_values(array_filter(
            $this->RecordSourceIdentifier,
            static fn ($item): bool => $item !== $recordSourceIdentifier,
        ));

        return $this;
    }

    public function setRecordSourceName(string $recordSourceName): static
    {
        $this->RecordSourceName = $recordSourceName;

        return $this;
    }

    public function getRecordSourceName(): ?string
    {
        return $this->RecordSourceName;
    }

    public function addProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier[] = $productIdentifier;

        return $this;
    }

    public function getProductIdentifier(): array
    {
        return $this->ProductIdentifier;
    }

    public function removeProductIdentifier(ProductIdentifier $productIdentifier): static
    {
        $this->ProductIdentifier = array_values(array_filter(
            $this->ProductIdentifier,
            static fn ($item): bool => $item !== $productIdentifier,
        ));

        return $this;
    }

    public function addBarcode(Barcode $barcode): static
    {
        $this->Barcode[] = $barcode;

        return $this;
    }

    public function getBarcode(): array
    {
        return $this->Barcode;
    }

    public function removeBarcode(Barcode $barcode): static
    {
        $this->Barcode = array_values(array_filter(
            $this->Barcode,
            static fn ($item): bool => $item !== $barcode,
        ));

        return $this;
    }

    public function setDescriptiveDetail(DescriptiveDetail $descriptiveDetail): static
    {
        $this->DescriptiveDetail = $descriptiveDetail;

        return $this;
    }

    public function getDescriptiveDetail(): ?DescriptiveDetail
    {
        return $this->DescriptiveDetail;
    }

    public function setCollateralDetail(CollateralDetail $collateralDetail): static
    {
        $this->CollateralDetail = $collateralDetail;

        return $this;
    }

    public function getCollateralDetail(): ?CollateralDetail
    {
        return $this->CollateralDetail;
    }

    public function setPromotionDetail(PromotionDetail $promotionDetail): static
    {
        $this->PromotionDetail = $promotionDetail;

        return $this;
    }

    public function getPromotionDetail(): ?PromotionDetail
    {
        return $this->PromotionDetail;
    }

    public function setContentDetail(ContentDetail $contentDetail): static
    {
        $this->ContentDetail = $contentDetail;

        return $this;
    }

    public function getContentDetail(): ?ContentDetail
    {
        return $this->ContentDetail;
    }

    public function setPublishingDetail(PublishingDetail $publishingDetail): static
    {
        $this->PublishingDetail = $publishingDetail;

        return $this;
    }

    public function getPublishingDetail(): ?PublishingDetail
    {
        return $this->PublishingDetail;
    }

    public function setRelatedMaterial(RelatedMaterial $relatedMaterial): static
    {
        $this->RelatedMaterial = $relatedMaterial;

        return $this;
    }

    public function getRelatedMaterial(): ?RelatedMaterial
    {
        return $this->RelatedMaterial;
    }

    public function setProductionDetail(ProductionDetail $productionDetail): static
    {
        $this->ProductionDetail = $productionDetail;

        return $this;
    }

    public function getProductionDetail(): ?ProductionDetail
    {
        return $this->ProductionDetail;
    }

    public function addProductSupply(ProductSupply $productSupply): static
    {
        $this->ProductSupply[] = $productSupply;

        return $this;
    }

    public function getProductSupply(): array
    {
        return $this->ProductSupply;
    }

    public function removeProductSupply(ProductSupply $productSupply): static
    {
        $this->ProductSupply = array_values(array_filter(
            $this->ProductSupply,
            static fn ($item): bool => $item !== $productSupply,
        ));

        return $this;
    }
}
