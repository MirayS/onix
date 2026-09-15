<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 260 — Epublication license date role
 *
 * @see https://ns.editeur.org/onix/en/260
 */
class CodeList260 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '14' => 'Valid from',
        '15' => 'Valid until',
        '24' => 'From… until date',
    ];

    protected static array $es = [
        '14' => 'Válido desde',
        '15' => 'Válido hasta',
        '24' => 'Desde... hasta fecha',
    ];

    protected static array $de = [
        '14' => 'Valid from',
        '15' => 'Valid until',
        '24' => 'From… until date',
    ];

    protected static array $fr = [
        '14' => 'Valid from',
        '15' => 'Valid until',
        '24' => 'From… until date',
    ];

    protected static array $it = [
        '14' => 'Valido da',
        '15' => 'Valido fino a',
        '24' => 'Dalla data... alla data',
    ];

    protected static array $nb = [
        '14' => 'Valid from',
        '15' => 'Valid until',
        '24' => 'From… until date',
    ];

    protected static array $tr = [
        '14' => 'Valid from',
        '15' => 'Valid until',
        '24' => 'From… until date',
    ];

}
