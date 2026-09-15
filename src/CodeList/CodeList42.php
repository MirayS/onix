<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 42 — Text item type
 *
 * @see https://ns.editeur.org/onix/en/42
 */
class CodeList42 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Textual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'Back matter',
    ];

    protected static array $es = [
        '01' => 'Obra textual',
        '02' => 'Preliminares',
        '03' => 'Cuerpo del texto',
        '04' => 'Finales del libro',
    ];

    protected static array $de = [
        '01' => 'Textual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'Back matter',
    ];

    protected static array $fr = [
        '01' => 'Œuvre textuelle',
        '02' => 'Pages de début',
        '03' => 'Corps de texte',
        '04' => 'Hors-texte',
    ];

    protected static array $it = [
        '01' => 'Opera testuale',
        '02' => 'Testo preliminare',
        '03' => 'Corpo del testo',
        '04' => 'Testo conclusivo',
    ];

    protected static array $nb = [
        '01' => 'Textual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'Back matter',
    ];

    protected static array $tr = [
        '01' => 'Metin eser',
        '02' => 'Ön bölüm',
        '03' => 'Gövde',
        '04' => 'Arka bölüm',
    ];

}
