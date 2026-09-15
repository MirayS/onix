<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 261 — Status detail type severity (master files)
 *
 * @see https://ns.editeur.org/onix/en/261
 */
class CodeList261 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'u' => 'Unclassifiable',
        'i' => 'Info',
        'q' => 'Query',
        'w' => 'Warning',
        'e' => 'Error',
        'f' => 'Fatal error',
    ];

}
