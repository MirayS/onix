<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 222 — Message status date role
 *
 * @see https://ns.editeur.org/onix/en/222
 */
class CodeList222 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Ingest date',
        '02' => 'Export date',
    ];

    protected static array $es = [
        '01' => 'Ingest date',
        '02' => 'Export date',
    ];

    protected static array $de = [
        '01' => 'Ingest date',
        '02' => 'Export date',
    ];

    protected static array $fr = [
        '01' => 'Date d’intégration',
        '02' => 'Date d’export',
    ];

    protected static array $it = [
        '01' => 'Data di importazione',
        '02' => 'Data di esportazione',
    ];

    protected static array $nb = [
        '01' => 'Ingest date',
        '02' => 'Export date',
    ];

    protected static array $tr = [
        '01' => 'Ingest date',
        '02' => 'Export date',
    ];

}
