<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 263 — Prize identifier type
 *
 * @see https://ns.editeur.org/onix/en/263
 */
class CodeList263 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary prize ID scheme',
        '91' => 'GND',
        'B6' => 'FAST',
    ];

}
