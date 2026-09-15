<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 225 — Message / Record status detail
 *
 * @see https://ns.editeur.org/onix/en/225
 */
class CodeList225 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '000' => 'Unknown error',
        '001' => 'Unknown warning',
    ];

    protected static array $es = [
        '000' => 'Unknown error',
        '001' => 'Unknown warning',
    ];

    protected static array $de = [
        '000' => 'Unknown error',
        '001' => 'Unknown warning',
    ];

    protected static array $fr = [
        '000' => 'Erreur inconnue',
        '001' => 'Avertissement inconnu',
    ];

    protected static array $it = [
        '000' => 'Errore sconosciuto',
        '001' => 'Avvertimento sconosciuto',
    ];

    protected static array $nb = [
        '000' => 'Unknown error',
        '001' => 'Unknown warning',
    ];

    protected static array $tr = [
        '000' => 'Unknown error',
        '001' => 'Unknown warning',
    ];

}
