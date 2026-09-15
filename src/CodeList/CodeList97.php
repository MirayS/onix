<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 97 — Bible text feature
 *
 * @see https://ns.editeur.org/onix/en/97
 */
class CodeList97 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'RL' => 'Red letter',
    ];

    protected static array $es = [
        'RL' => 'Letras rojas',
    ];

    protected static array $de = [
        'RL' => 'Red letter',
    ];

    protected static array $fr = [
        'RL' => 'Lettres rouges',
    ];

    protected static array $it = [
        'RL' => 'Caratteri rossi',
    ];

    protected static array $nb = [
        'RL' => 'Rød skrift',
    ];

    protected static array $tr = [
        'RL' => 'Kırmızı harfli',
    ];

}
