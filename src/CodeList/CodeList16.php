<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 16 — Work identifier type
 *
 * @see https://ns.editeur.org/onix/en/16
 */
class CodeList16 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary work ID scheme',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '19' => 'ISAN',
        '31' => 'EIDR Content ID',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'ISBN-10',
        '06' => 'DOI',
        '11' => 'ISTC',
        '15' => 'ISBN-13',
        '18' => 'ISRC',
        '32' => 'GLIMIR',
        '33' => 'OWI',
        '39' => 'ISCC',
    ];

}
