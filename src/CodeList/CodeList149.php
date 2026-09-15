<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 149 — Title element level
 *
 * @see https://ns.editeur.org/onix/en/149
 */
class CodeList149 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Product',
        '02' => 'Collection level',
        '03' => 'Subcollection',
        '04' => 'Content item',
        '05' => 'Master brand',
        '06' => 'Sub-subcollection',
        '07' => 'Universe',
    ];

    protected static array $es = [
        '01' => 'Producto',
        '02' => 'Nivel del conjunto',
        '03' => 'Subnivel',
        '04' => 'Elemento de contenido',
        '05' => 'Marca global («Master brand»)',
        '06' => 'Sub-subcolección',
    ];

    protected static array $de = [
        '01' => 'Product',
        '02' => 'Collection level',
        '03' => 'Subcollection',
        '04' => 'Content item',
        '05' => 'Master brand',
        '06' => 'Sub-subcollection',
    ];

    protected static array $fr = [
        '01' => 'Produit',
        '02' => 'Niveau collection',
        '03' => 'Sous-collection',
        '04' => 'Elément contenu',
        '05' => 'Marque principale',
        '06' => 'Sous-sous-collection',
    ];

    protected static array $it = [
        '01' => 'Prodotto',
        '02' => 'Collezione',
        '03' => 'Sottocollezione',
        '04' => 'Contenuto',
        '05' => 'Brand principale',
        '06' => 'Sotto-sottocollezione',
    ];

    protected static array $nb = [
        '01' => 'Produkt',
        '02' => 'Samlingsnivå (øverste nivå)',
        '03' => 'Samlingsnivå (underordnet nivå)',
        '04' => 'Innholdselement',
        '05' => 'Merkevarenavn',
        '06' => 'Samlingsnivå (tredje nivå)',
    ];

    protected static array $tr = [
        '01' => 'Ürün',
        '02' => 'Koleksiyon düzeyi',
        '03' => 'Alt koleksiyon',
        '04' => 'İçerik ögesi',
        '05' => 'Ana marka',
        '06' => 'Alt-alt koleksiyon',
    ];

}
