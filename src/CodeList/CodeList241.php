<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 241 — AV Item Identifier type
 *
 * @see https://ns.editeur.org/onix/en/241
 */
class CodeList241 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary AV Item ID scheme',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR Content ID',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR DOI',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMBD',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR DOI',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR DOI',
    ];

    protected static array $tr = [
        '01' => 'Proprietary',
        '03' => 'GTIN-13',
        '06' => 'DOI',
        '12' => 'IMDB',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR DOI',
    ];

}
