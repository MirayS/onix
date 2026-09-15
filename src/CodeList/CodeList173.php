<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 173 — Price date role
 *
 * @see https://ns.editeur.org/onix/en/173
 */
class CodeList173 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '14' => 'From date',
        '15' => 'Until date',
        '24' => 'From… until date',
    ];

    protected static array $es = [
        '14' => 'Fecha desde',
        '15' => 'Fecha hasta',
        '24' => 'Fecha desde … hasta',
    ];

    protected static array $de = [
        '14' => 'From date',
        '15' => 'Until date',
        '24' => 'From… until date',
    ];

    protected static array $fr = [
        '14' => 'A partir de',
        '15' => 'Jusqu’au',
        '24' => 'A partir du… jusqu’au',
    ];

    protected static array $it = [
        '14' => 'Dalla data',
        '15' => 'Alla data',
        '24' => 'Dalla data... alla data',
    ];

    protected static array $nb = [
        '14' => 'Fra og med-dato',
        '15' => 'Til og med-dato',
        '24' => 'Fra-til dato',
    ];

    protected static array $tr = [
        '14' => 'Şu tarihten itibaren',
        '15' => 'Şu tarihe kadar',
        '24' => 'Şu tarihten ... şu tarihe kadar',
    ];

}
