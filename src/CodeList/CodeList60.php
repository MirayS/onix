<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 60 — Unit of pricing
 *
 * @see https://ns.editeur.org/onix/en/60
 */
class CodeList60 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Per copy of whole product',
        '01' => 'Per page for printed loose-leaf content only',
    ];

    protected static array $es = [
        '00' => 'Por cada ejemplar del producto completo',
        '01' => 'Por página; sólo para productos en hojas sueltas',
    ];

    protected static array $de = [
        '00' => 'Per copy of whole product',
        '01' => 'Per page for printed loose-leaf content only',
    ];

    protected static array $fr = [
        '00' => 'Par exemplaire du produit',
        '01' => 'Par page, pour les contenus imprimés en feuillets mobiles seulement',
    ];

    protected static array $it = [
        '00' => 'Per copia di prodotto intero',
        '01' => 'Per pagina – solo per prodotti a fogli mobili',
    ];

    protected static array $nb = [
        '00' => 'Per copy of whole product',
        '01' => 'Per page for printed loose-leaf content only',
    ];

    protected static array $tr = [
        '00' => 'Bütün ürünün beher nüshası',
        '01' => 'Sayfa başı, sadece basılı föy sayfası şeklindeki içerik için',
    ];

}
