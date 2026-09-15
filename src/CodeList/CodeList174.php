<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 174 — Printed on product
 *
 * @see https://ns.editeur.org/onix/en/174
 */
class CodeList174 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'No',
        '02' => 'Yes',
    ];

    protected static array $es = [
        '01' => 'No',
        '02' => 'Sí',
    ];

    protected static array $de = [
        '01' => 'No',
        '02' => 'Yes',
    ];

    protected static array $fr = [
        '01' => 'Non',
        '02' => 'Oui',
    ];

    protected static array $it = [
        '01' => 'No',
        '02' => 'Sì',
    ];

    protected static array $nb = [
        '01' => 'Nei',
        '02' => 'Ja',
    ];

    protected static array $tr = [
        '01' => 'Hayır',
        '02' => 'Evet',
    ];

}
