<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 251 — Resource role code
 *
 * @see https://ns.editeur.org/onix/en/251
 */
class CodeList251 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'C01' => 'Cover',
        'C02' => 'Jacket',
    ];

}
