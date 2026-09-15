<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 229 — Gender – based on ISO 5218
 *
 * @see https://ns.editeur.org/onix/en/229
 */
class CodeList229 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'u' => 'Unknown or unspecified',
        'f' => 'Female',
        'm' => 'Male',
    ];

    protected static array $es = [
        'u' => 'Desconocido o no especificado',
        'f' => 'Femenino',
        'm' => 'Masculino',
    ];

    protected static array $de = [
        'u' => 'Unknown or unspecified',
        'f' => 'Female',
        'm' => 'Male',
    ];

    protected static array $fr = [
        'u' => 'Inconnu / non spécifié',
        'f' => 'Female',
        'm' => 'Male',
    ];

    protected static array $it = [
        'u' => 'Sconosciuto o non specificato',
        'f' => 'Femminile',
        'm' => 'Maschile',
    ];

    protected static array $nb = [
        'u' => 'Ukjent eller uspesifisert',
        'f' => 'Kvinne',
        'm' => 'Mann',
    ];

    protected static array $tr = [
        'u' => 'Bilinmeyen veya belirtilmemiş',
        'f' => 'Kadın',
        'm' => 'Erkek',
    ];

}
