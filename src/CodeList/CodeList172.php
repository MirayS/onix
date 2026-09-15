<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 172 — Currency zone
 *
 * @see https://ns.editeur.org/onix/en/172
 */
class CodeList172 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'EUR' => 'Eurozone',
    ];

    protected static array $es = [
        'EUR' => 'Eurozona',
    ];

    protected static array $de = [
        'EUR' => 'Eurozone',
    ];

    protected static array $fr = [
        'EUR' => 'Zone euro',
    ];

    protected static array $it = [
        'EUR' => 'Eurozona',
    ];

    protected static array $nb = [
        'EUR' => 'Eurozone',
    ];

    protected static array $tr = [
        'EUR' => 'Euro bölgesi',
    ];

}
