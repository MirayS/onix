<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 148 — Collection type
 *
 * @see https://ns.editeur.org/onix/en/148
 */
class CodeList148 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unspecified (default)',
        '10' => 'Publisher collection',
        '11' => 'Collection éditoriale',
        '20' => 'Ascribed collection',
    ];

    protected static array $es = [
        '00' => 'No especificado (valor por defecto)',
        '10' => 'Conjunto definido por la editorial',
        '11' => 'Collection éditoriale',
        '20' => 'Conjunto definido por algún agente externo a la editorial',
    ];

    protected static array $de = [
        '00' => 'Unspecified (default)',
        '10' => 'Publisher collection',
        '11' => 'Collection éditoriale',
        '20' => 'Ascribed collection',
    ];

    protected static array $fr = [
        '00' => 'Non spécifié (par défaut)',
        '10' => 'Collection (série)',
        '11' => 'Collection',
        '20' => 'Collection attribuée',
    ];

    protected static array $it = [
        '00' => 'Non specificata (valore predefinito)',
        '10' => 'Collezione dell’editore',
        '11' => 'Collection éditoriale',
        '20' => 'Collezione attribuita',
    ];

    protected static array $nb = [
        '00' => 'Uspesifisert (standard)',
        '10' => 'Forlagsserie / Forlagsdefinert samling',
        '11' => 'Collection éditoriale',
        '20' => 'Annen tilknytning / Tillagt samling',
    ];

    protected static array $tr = [
        '00' => 'Belirtilmemiş (varsayılan)',
        '10' => 'Yayımcı koleksiyonu',
        '11' => 'Collection éditoriale',
        '20' => 'Üstlenici koleksiyonu',
    ];

}
