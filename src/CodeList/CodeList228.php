<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 228 — Grant identifier type
 *
 * @see https://ns.editeur.org/onix/en/228
 */
class CodeList228 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary grant ID scheme',
        '06' => 'DOI',
    ];

    protected static array $es = [
        '01' => 'Propio / No estándar',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
    ];

    protected static array $tr = [
        '01' => 'Özel',
    ];

}
