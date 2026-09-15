<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 218 — License expression type
 *
 * @see https://ns.editeur.org/onix/en/218
 */
class CodeList218 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Human readable',
        '02' => 'Professional readable',
        '03' => 'Human readable additional license',
        '04' => 'Professional readable additional license',
        '10' => 'ONIX-PL',
        '20' => 'ODRL',
        '21' => 'ODRL additional license',
    ];

    protected static array $es = [
        '01' => 'Legible por usuarios',
        '02' => 'Legible por profesionales',
        '10' => 'ONIX-PL',
    ];

    protected static array $de = [
        '01' => 'Human readable',
        '02' => 'Professional readable',
        '10' => 'ONIX-PL',
    ];

    protected static array $fr = [
        '01' => 'Human readable',
        '02' => 'Professional readable',
        '10' => 'ONIX-PL',
    ];

    protected static array $it = [
        '01' => 'Leggibile da tutti',
        '02' => 'Leggibile da professionisti',
        '10' => 'ONIX-PL',
    ];

    protected static array $nb = [
        '01' => 'For allmenn bruk',
        '02' => 'For juridiske eksperter',
        '10' => 'ONIX-PL',
    ];

    protected static array $tr = [
        '01' => 'Gözle okunabilir',
        '02' => 'Profesyonel okunabilir',
        '10' => 'ONIX-PL',
    ];

}
