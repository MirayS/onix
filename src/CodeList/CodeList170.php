<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 170 — Discount type
 *
 * @see https://ns.editeur.org/onix/en/170
 */
class CodeList170 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Rising discount',
        '02' => 'Rising discount (cumulative)',
        '03' => 'Progressive discount',
        '04' => 'Progressive discount (cumulative)',
    ];

    protected static array $es = [
        '01' => 'Descuento creciente',
        '02' => 'Descuento creciente (acumulativo)',
        '03' => 'Descuento progresivo',
        '04' => 'Descuento progresivo (acumulativo)',
    ];

    protected static array $de = [
        '01' => 'Rising discount',
        '02' => 'Rising discount (cumulative)',
        '03' => 'Progressive discount',
        '04' => 'Progressive discount (cumulative)',
    ];

    protected static array $fr = [
        '01' => 'Remise croissante',
        '02' => 'Remise croissante (cumulée)',
        '03' => 'Remise progressive',
        '04' => 'Remise progressive (cumulée)',
    ];

    protected static array $it = [
        '01' => 'Sconto crescente',
        '02' => 'Sconto crescente (cumulativo)',
        '03' => 'Sconto progressivo',
        '04' => 'Sconto progressivo (cumulativo)',
    ];

    protected static array $nb = [
        '01' => 'Rising discount',
        '02' => 'Rising discount (cumulative)',
        '03' => 'Progressive discount',
        '04' => 'Progressive discount (cumulative)',
    ];

    protected static array $tr = [
        '01' => 'Artan iskonto',
        '02' => 'Artan iskonto (kümülatif)',
        '03' => 'Kademeli iskonto',
        '04' => 'Kademeli iskonto (kümülatif)',
    ];

}
