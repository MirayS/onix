<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 223 — Status detail code type
 *
 * @see https://ns.editeur.org/onix/en/223
 */
class CodeList223 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary status detail code type',
        '02' => 'ONIX Status detail code',
    ];

    protected static array $es = [
        '01' => 'Proprietary',
        '02' => 'ONIX Status detail code',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'ONIX Status detail code',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Code du détail du statut ONIX',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Codice ONIX di dettaglio dello stato',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'ONIX Status detail code',
    ];

    protected static array $tr = [
        '01' => 'Proprietary',
        '02' => 'ONIX Status detail code',
    ];

}
