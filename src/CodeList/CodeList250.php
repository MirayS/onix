<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 250 — Resource identifier type
 *
 * @see https://ns.editeur.org/onix/en/250
 */
class CodeList250 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary resource ID scheme',
        '09' => 'ISCC',
    ];

    protected static array $es = [
        '01' => 'Propio',
        '09' => 'ISCC',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '09' => 'ISCC',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '09' => 'ISCC',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '09' => 'ISCC',
    ];

    protected static array $nb = [
        '01' => 'Proprietary',
        '09' => 'ISCC',
    ];

    protected static array $tr = [
        '01' => 'Proprietary',
        '09' => 'ISCC',
    ];

}
