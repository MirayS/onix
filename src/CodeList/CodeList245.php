<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 245 — Event type
 *
 * @see https://ns.editeur.org/onix/en/245
 */
class CodeList245 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unspecified – see description',
        '01' => 'Book signing',
        '02' => 'Book reading',
    ];

    protected static array $es = [
        '00' => 'No especificado - Véase la descripción',
        '01' => 'Firma de libros',
        '02' => 'Lectura del libro',
    ];

    protected static array $de = [
        '00' => 'Unspecified – see description',
        '01' => 'Book signing',
        '02' => 'Book reading',
    ];

    protected static array $fr = [
        '00' => 'Non spécifié',
        '01' => 'Signature de livre',
        '02' => 'Lecture de livre',
    ];

    protected static array $it = [
        '00' => 'Non specificato – vedi descrizione',
        '01' => 'Firma del libro',
        '02' => 'Lettura del libro',
    ];

    protected static array $nb = [
        '00' => 'Unspecified – see description',
        '01' => 'Book signing',
        '02' => 'Book reading',
    ];

    protected static array $tr = [
        '00' => 'Unspecified – see description',
        '01' => 'Book signing',
        '02' => 'Book reading',
    ];

}
