<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 256 — Resource feature code
 *
 * @see https://ns.editeur.org/onix/en/256
 */
class CodeList256 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Image shows product in packaging',
        '02' => 'Image shows product (without packaging)',
        '03' => 'Image shows product and accessories',
        '04' => 'Image shows assembled product',
        '05' => 'Image shows product in use',
        '06' => 'Image shows multiple products',
        '07' => 'Image shows detail of product',
        '21' => '3D perspective ‘front’',
        '22' => '3D perspective ‘back’',
        '23' => '3D perspective ‘front foredge’',
        '24' => '3D perspective ‘back foredge’',
        '33' => '3D perspective ‘front low’',
        '34' => '3D perspective ‘back low’',
        '35' => '3D perspective ‘front foredge low’',
        '36' => '3D perspective ‘back foredge low’',
        '41' => '2D front',
        '42' => '2D back',
        '43' => '2D spine',
        '47' => '3D perspective ‘horizontal’',
        '48' => '3D perspective ‘vertical’',
        '49' => '3D perspective ‘open’',
        '50' => '3D perspective ‘closed’',
    ];

    protected static array $es = [
        '01' => 'La imagen muestra el producto en su embalaje o envoltorio',
        '02' => 'La imagen muestra el producto (sin embalaje)',
        '03' => 'La imagen muestra el producto y sus accesorios',
        '04' => 'La imagen muestra el producto ensamblado',
        '05' => 'La imagen muestra el producto en uso',
        '06' => 'La imagen muestra múltiples productos',
        '07' => 'La imagen muestra un detalle del producto',
        '21' => 'Perspectiva 3D: Frente',
        '22' => 'Perspectiva 3D: Trasera',
        '23' => 'Perspectiva 3D: Borde delantero',
        '24' => 'Perspectiva 3D: Borde trasero',
        '33' => 'Perspectiva 3D: Frente bajo',
        '34' => 'Perspectiva 3D: Trasera baja',
        '35' => 'Perspectiva 3D: Borde delantero bajo',
        '36' => 'Perspectiva 3D: Borde posterior bajo',
        '41' => 'Frontal 2D',
        '42' => 'Trasera 2D',
        '43' => 'Lomo 2D',
        '47' => 'Perspectiva 3D: Horizontal',
        '48' => 'Perspectiva 3D: Vertical',
    ];

    protected static array $de = [
        '01' => 'Image shows product in packaging',
        '02' => 'Image shows product (without packaging)',
        '03' => 'Image shows product and accessories',
        '04' => 'Image shows assembled product',
        '05' => 'Image shows product in use',
        '06' => 'Image shows multiple products',
        '07' => 'Image shows detail of product',
        '21' => '3D perspective ‘front’',
        '22' => '3D perspective ‘back’',
        '23' => '3D perspective ‘front foredge’',
        '24' => '3D perspective ‘back foredge’',
        '33' => '3D perspective ‘front low’',
        '34' => '3D perspective ‘back low’',
        '35' => '3D perspective ‘front foredge low’',
        '36' => '3D perspective ‘back foredge low’',
        '41' => '2D front',
        '42' => '2D back',
        '43' => '2D spine',
        '47' => '3D perspective ‘horizontal’',
        '48' => '3D perspective ‘vertical’',
    ];

    protected static array $fr = [
        '01' => 'Image montrant le produit dans son packaging',
        '02' => 'Image montrant le produit (sans packaging)',
        '03' => 'Image montrant le produit et des accessoires',
        '04' => 'Image montrant le produit assemblé',
        '05' => 'Image montrant le produit en cours d’utilisation',
        '06' => 'Image montrant plusieurs produits',
        '07' => 'Image montrant les détails du produit',
        '21' => 'Perspective en 3D de face',
        '22' => 'Perspective en 3D de derrière',
        '23' => 'Perspective en 3D de la tranche',
        '24' => 'Perspective en 3D du dos',
        '33' => 'Perspective en 3D de l’“avant bas”',
        '34' => 'Perspective en 3D de l’“arrière bas”',
        '35' => 'Perspective en 3D de « la tranche avant bas »',
        '36' => 'Perspective en 3D de « la tranche arrière bas »',
        '41' => '2D face',
        '42' => '2D 4e',
        '43' => '2D dos',
        '47' => 'Perspective en 3D horizontale',
        '48' => 'Perspective en 3D verticale',
    ];

    protected static array $it = [
        '01' => 'L’immagine mostra il prodotto confezionato',
        '02' => 'L’immagine mostra il prodotto (senza confezione)',
        '03' => 'L’immagine mostra il prodotto e gli accessori',
        '04' => 'L’immagine mostra il prodotto assemblato',
        '05' => 'L’immagine mostra il prodotto durante l’uso',
        '06' => 'L’immagine mostra più prodotti',
        '07' => 'L’immagine mostra dettagli del prodotto',
        '21' => 'Prospettiva 3D “frontale”',
        '22' => 'Prospettiva 3D “posteriore”',
        '23' => 'Prospettiva 3D “frontale con taglio esterno”',
        '24' => 'Prospettiva 3D “posteriore con taglio esterno”',
        '33' => 'Prospettiva 3D “frontale dal basso”',
        '34' => 'Prospettiva 3D “posteriore dal basso”',
        '35' => 'Prospettiva 3D “frontale con taglio esterno dal basso”',
        '36' => 'Prospettiva 3D “posteriore con taglio esterno dal basso”',
        '41' => '2D frontale',
        '42' => '2D posteriore',
        '43' => '2D dorso',
        '47' => 'Prospettiva 3D “orizzontale”',
        '48' => 'Prospettiva 3D “verticale”',
    ];

    protected static array $nb = [
        '01' => 'Image shows product in packaging',
        '02' => 'Image shows product (without packaging)',
        '03' => 'Image shows product and accessories',
        '04' => 'Image shows assembled product',
        '05' => 'Image shows product in use',
        '06' => 'Image shows multiple products',
        '07' => 'Image shows detail of product',
        '21' => '3D perspective ‘front’',
        '22' => '3D perspective ‘back’',
        '23' => '3D perspective ‘front foredge’',
        '24' => '3D perspective ‘back foredge’',
        '33' => '3D perspective ‘front low’',
        '34' => '3D perspective ‘back low’',
        '35' => '3D perspective ‘front foredge low’',
        '36' => '3D perspective ‘back foredge low’',
        '41' => '2D front',
        '42' => '2D back',
        '43' => '2D spine',
        '47' => '3D perspective ‘horizontal’',
        '48' => '3D perspective ‘vertical’',
    ];

    protected static array $tr = [
        '01' => 'Image shows product in packaging',
        '02' => 'Image shows product (without packaging)',
        '03' => 'Image shows product and accessories',
        '04' => 'Image shows assembled product',
        '05' => 'Image shows product in use',
        '06' => 'Image shows multiple products',
        '07' => 'Image shows detail of product',
        '21' => '3D perspective ‘front’',
        '22' => '3D perspective ‘back’',
        '23' => '3D perspective ‘front foredge’',
        '24' => '3D perspective ‘back foredge’',
        '33' => '3D perspective ‘front low’',
        '34' => '3D perspective ‘back low’',
        '35' => '3D perspective ‘front foredge low’',
        '36' => '3D perspective ‘back foredge low’',
        '41' => '2D front',
        '42' => '2D back',
        '43' => '2D spine',
        '47' => '3D perspective ‘horizontal’',
        '48' => '3D perspective ‘vertical’',
    ];

}
