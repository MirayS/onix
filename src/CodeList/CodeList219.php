<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 219 — Rights type
 *
 * @see https://ns.editeur.org/onix/en/219
 */
class CodeList219 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'C' => 'Copyright',
        'P' => 'Phonogram right',
        'D' => 'Database right',
    ];

    protected static array $es = [
        'C' => 'Copyright',
        'P' => 'Derechos fonográficos',
        'D' => 'Derechos de bases de datos',
    ];

    protected static array $de = [
        'C' => 'Copyright',
        'P' => 'Phonogram right',
        'D' => 'Database right',
    ];

    protected static array $fr = [
        'C' => 'Copyright',
        'P' => 'Droit des producteurs de phonogrammes',
        'D' => 'Droit de base de données',
    ];

    protected static array $it = [
        'C' => 'Copyright',
        'P' => 'Diritto fonografico',
        'D' => 'Diritto sulla base dati',
    ];

    protected static array $nb = [
        'C' => 'Copyright',
        'P' => 'Phonogram right',
        'D' => 'Database right',
    ];

    protected static array $tr = [
        'C' => 'Telif hakkı',
        'P' => 'Fonogram hakkı',
        'D' => 'Veritabanı hakkı',
    ];

}
