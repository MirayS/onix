<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 141 — Barcode indicator
 *
 * @see https://ns.editeur.org/onix/en/141
 */
class CodeList141 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Not barcoded',
        '01' => 'Barcoded, scheme unspecified',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (US dollar price encoded)',
        '04' => 'GTIN-13+5 (CAN dollar price encoded)',
        '05' => 'GTIN-13+5 (no price encoded)',
        '06' => 'UPC-12 (item-specific)',
        '07' => 'UPC-12+5 (item-specific)',
        '08' => 'UPC-12 (price-point)',
        '09' => 'UPC-12+5 (price-point)',
        '10' => 'GTIN-13+5 (UK Pound Sterling price encoded)',
        '11' => 'GTIN-13+5 (other price encoded)',
        '12' => 'GTIN-13+2',
        '13' => 'GTIN-13+5',
    ];

    protected static array $es = [
        '00' => 'Sin código de barras',
        '01' => 'Con código de barras',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (precio codificado en dólares estadounidenses)',
        '04' => 'GTIN-13+5 (precio codificado en dólares CAN)',
        '05' => 'GTIN-13+5 (Sin precio codificado)',
        '06' => 'UPC12 (item-specific)',
        '07' => 'UPC12+5 (item-specific)',
        '08' => 'UPC12 (price-point)',
        '09' => 'UPC12+5 (price-point)',
        '10' => 'GTIN-13+5 (precio codificado en libras esterlinas)',
    ];

    protected static array $de = [
        '00' => 'Not barcoded',
        '01' => 'Barcoded, scheme unspecified',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (US dollar price encoded)',
        '04' => 'GTIN-13+5 (CAN dollar price encoded)',
        '05' => 'GTIN-13+5 (no price encoded)',
        '06' => 'UPC-12 (item-specific)',
        '07' => 'UPC-12+5 (item-specific)',
        '08' => 'UPC-12 (price-point)',
        '09' => 'UPC-12+5 (price-point)',
        '10' => 'GTIN-13+5 (UK Pound Sterling price encoded)',
    ];

    protected static array $fr = [
        '00' => 'Pas de code-barres',
        '01' => 'Code-barres, système non spécifié',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (prix codé en dollars américains)',
        '04' => 'GTIN-13+5 (prix codé en dollars canadiens)',
        '05' => 'GTIN-13+5 (pas de prix codé)',
        '06' => 'UPC-12 (spécifique à l’article)',
        '07' => 'UPC-12+5 (spécifique à l’article)',
        '08' => 'UPC-12 (niveau de prix)',
        '09' => 'UPC-12+5 (niveau de prix)',
        '10' => 'GTIN-13+5 (prix codé en Livres Sterling)',
    ];

    protected static array $it = [
        '00' => 'Privo di codice a barre',
        '01' => 'Dotato di codice a barre, sistema di codifica non specificato',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (prezzo in dollari americani codificato)',
        '04' => 'GTIN-13+5 (prezzo in dollari canadesi codificato)',
        '05' => 'GTIN-13+5 (prezzo non codificato)',
        '06' => 'UPC-12 (item-specific)',
        '07' => 'UPC-12+5 (item-specific)',
        '08' => 'UPC-12 (price-point)',
        '09' => 'UPC-12+5 (price-point)',
        '10' => 'GTIN-13+5 (prezzo in sterline inglesi codificato)',
    ];

    protected static array $nb = [
        '00' => 'Not barcoded',
        '01' => 'Barcoded, scheme unspecified',
        '02' => 'GTIN-13',
        '03' => 'GTIN-13+5 (US dollar price encoded)',
        '04' => 'GTIN-13+5 (CAN dollar price encoded)',
        '05' => 'GTIN-13+5 (no price encoded)',
        '06' => 'UPC-12 (item-specific)',
        '07' => 'UPC-12+5 (item-specific)',
        '08' => 'UPC-12 (price-point)',
        '09' => 'UPC-12+5 (price-point)',
        '10' => 'GTIN-13+5 (UK Pound Sterling price encoded)',
    ];

    protected static array $tr = [
        '00' => 'Barkodsuz',
        '01' => 'Barkodlu, plan belirtilmemiş',
        '02' => 'GTIN-13',
        '03' => 'GTIN -13+5 (ABD doları fiyat kodu)',
        '04' => 'GTIN -13+5 (CAN doları fiyat kodu)',
        '05' => 'GTIN -13+5 (fiyat kodu yok)',
        '06' => 'UPC-12 (ürüne özgü)',
        '07' => 'UPC-12+5 (ürüne özgü)',
        '08' => 'UPC-12 (fiyat noktası)',
        '09' => 'UPC-12 +5 (fiyat noktası)',
        '10' => 'GTIN-13+5 (UK Pound Sterling price encoded)',
    ];

}
