<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 61 — Price status
 *
 * @see https://ns.editeur.org/onix/en/61
 */
class CodeList61 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unspecified',
        '01' => 'Provisional',
        '02' => 'Confirmed',
    ];

    protected static array $es = [
        '00' => 'No especificado',
        '01' => 'Provisional',
        '02' => 'Confirmado',
    ];

    protected static array $de = [
        '00' => 'Unspecified',
        '01' => 'Provisional',
        '02' => 'Confirmed',
    ];

    protected static array $fr = [
        '00' => 'Non spécifié',
        '01' => 'Provisoire',
        '02' => 'Confirmé',
    ];

    protected static array $it = [
        '00' => 'Non specificato',
        '01' => 'Provvisorio',
        '02' => 'Confermato',
    ];

    protected static array $nb = [
        '00' => 'Uspesifisert',
        '01' => 'Foreløpig',
        '02' => 'Fast',
    ];

    protected static array $tr = [
        '00' => 'Belirtilmemiş',
        '01' => 'Geçici',
        '02' => 'Kesin',
    ];

}
