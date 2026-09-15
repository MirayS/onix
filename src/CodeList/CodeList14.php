<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 14 — Text case flag
 *
 * @see https://ns.editeur.org/onix/en/14
 */
class CodeList14 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Undefined',
        '01' => 'Sentence case',
        '02' => 'Title case',
        '03' => 'All capitals',
    ];

    protected static array $es = [
        '00' => 'No definido',
        '01' => 'Mayúsculas al inicio de la frase',
        '02' => 'Iniciales mayúsculas',
        '03' => 'Todo en mayúsculas',
    ];

    protected static array $de = [
        '00' => 'Undefined',
        '01' => 'Sentence case',
        '02' => 'Title case',
        '03' => 'All capitals',
    ];

    protected static array $fr = [
        '00' => 'Non défini',
        '01' => 'Casse de phrase',
        '02' => 'Casse de titre',
        '03' => 'Lettres majuscules uniquement',
    ];

    protected static array $it = [
        '00' => 'Non definito',
        '01' => 'Maiuscole a inizio frase',
        '02' => 'Iniziali maiuscole',
        '03' => 'Tutte maiuscole',
    ];

    protected static array $nb = [
        '00' => 'Undefined',
        '01' => 'Sentence case',
        '02' => 'Title case',
        '03' => 'All capitals',
    ];

    protected static array $tr = [
        '00' => 'Belirtilmemiş',
        '01' => 'Cümle düzeni',
        '02' => 'Baş harfler büyük',
        '03' => 'Tümü büyük harf',
    ];

}
