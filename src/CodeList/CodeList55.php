<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 55 — Date format
 *
 * @see https://ns.editeur.org/onix/en/55
 */
class CodeList55 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'YYYYMMDD',
        '01' => 'YYYYMM',
        '02' => 'YYYYWW',
        '03' => 'YYYYQ',
        '04' => 'YYYYS',
        '05' => 'YYYY',
        '06' => 'YYYYMMDDYYYYMMDD',
        '07' => 'YYYYMMYYYYMM',
        '08' => 'YYYYWWYYYYWW',
        '09' => 'YYYYQYYYYQ',
        '10' => 'YYYYSYYYYS',
        '11' => 'YYYYYYYY',
        '12' => 'Text string',
        '13' => 'YYYYMMDDThhmm',
        '14' => 'YYYYMMDDThhmmss',
        '20' => 'YYYYMMDD (H)',
        '21' => 'YYYYMM (H)',
        '25' => 'YYYY (H)',
        '32' => 'Text string (H)',
    ];

    protected static array $es = [
        '00' => 'AAAAMMDD',
        '01' => 'AAAAMM',
        '02' => 'AAAASS',
        '03' => 'AAAAT',
        '04' => 'AAAAE',
        '05' => 'AAAA',
        '06' => 'AAAAMMDDAAAAMMDD',
        '07' => 'AAAAMMAAAAMM',
        '08' => 'AAAASSAAAASS',
        '09' => 'AAAATAAAAT',
        '10' => 'AAAAEAAAAE',
        '11' => 'AAAAAAAA',
        '12' => 'Texto',
        '13' => 'YYYYMMDDThhmm',
        '14' => 'YYYYMMDDThhmmss',
        '20' => 'YYYYMMDD (H)',
        '21' => 'YYYYMM (H)',
        '25' => 'YYYY (H)',
        '32' => 'Cadena de texto (H)',
    ];

    protected static array $de = [
        '00' => 'YYYYMMDD',
        '01' => 'YYYYMM',
        '02' => 'YYYYWW',
        '03' => 'YYYYQ',
        '04' => 'YYYYS',
        '05' => 'YYYY',
        '06' => 'YYYYMMDDYYYYMMDD',
        '07' => 'YYYYMMYYYYMM',
        '08' => 'YYYYWWYYYYWW',
        '09' => 'YYYYQYYYYQ',
        '10' => 'YYYYSYYYYS',
        '11' => 'YYYYYYYY',
        '12' => 'Text string',
        '13' => 'YYYYMMDDThhmm',
        '14' => 'YYYYMMDDThhmmss',
        '20' => 'YYYYMMDD (H)',
        '21' => 'YYYYMM (H)',
        '25' => 'YYYY (H)',
        '32' => 'Text string (H)',
    ];

    protected static array $fr = [
        '00' => 'AAAAMMJJ',
        '01' => 'AAAAMM',
        '02' => 'AAAASS',
        '03' => 'AAAAT',
        '04' => 'AAAAZ',
        '05' => 'AAAA',
        '06' => 'AAAAMMJJAAAAMMJ J',
        '07' => 'AAAAMMAAAAMM',
        '08' => 'AAAASSAAAASS',
        '09' => 'AAAATAAAAT',
        '10' => 'AAAAZAAAAZ',
        '11' => 'AAAAAAAA',
        '12' => 'Chaîne de texte',
        '13' => 'AAAAMMJJThhmm',
        '14' => 'AAAAMMJJThhmmss',
        '20' => 'AAAAMMJJ (H)',
        '21' => 'AAAAMM (H)',
        '25' => 'AAAA (H)',
        '32' => 'Chaîne de texte (H)',
    ];

    protected static array $it = [
        '00' => 'YYYYMMDD',
        '01' => 'YYYYMM',
        '02' => 'YYYYWW',
        '03' => 'YYYYQ',
        '04' => 'YYYYS',
        '05' => 'YYYY',
        '06' => 'YYYYMMDDYYYYMMDD',
        '07' => 'YYYYMMYYYYMM',
        '08' => 'YYYYWWYYYYWW',
        '09' => 'YYYYQYYYYQ',
        '10' => 'YYYYSYYYYS',
        '11' => 'YYYYYYYY',
        '12' => 'Stringa di testo libero',
        '13' => 'YYYYMMDDThhmm',
        '14' => 'YYYYMMDDThhmmss',
        '20' => 'YYYYMMDD (H)',
        '21' => 'YYYYMM (H)',
        '25' => 'YYYY (H)',
        '32' => 'Stringa di testo (H)',
    ];

    protected static array $nb = [
        '00' => 'YYYYMMDD',
        '01' => 'YYYYMM',
        '02' => 'YYYYWW',
        '03' => 'YYYYQ',
        '04' => 'YYYYS',
        '05' => 'YYYY',
        '06' => 'YYYYMMDDYYYYMMDD',
        '07' => 'YYYYMMYYYYMM',
        '08' => 'YYYYWWYYYYWW',
        '09' => 'YYYYQYYYYQ',
        '10' => 'YYYYQYYYYQ',
        '11' => 'YYYYYYYY',
        '12' => 'Tekststreng',
        '13' => 'YYYYMMDDThhmm',
        '14' => 'YYYYMMDDThhmmss',
        '20' => 'YYYYMMDD (H)',
        '21' => 'YYYYMM (H)',
        '25' => 'YYYY (H)',
        '32' => 'Tekststreng (H)',
    ];

    protected static array $tr = [
        '00' => 'YYYYAAGG',
        '01' => 'YYYYAA',
        '02' => 'YYYYHH',
        '03' => 'YYYYÇ',
        '04' => 'YYYYM',
        '05' => 'YYYY',
        '06' => 'YYYYAAGGYYYYAAGG',
        '07' => 'YYYYAAYYYYAA',
        '08' => 'YYYYHHYYYYHH',
        '09' => 'YYYYÇYYYYÇ',
        '10' => 'YYYYMYYYYM',
        '11' => 'YYYYYYYY',
        '12' => 'Metin',
        '13' => 'YYYYAAGGTssdd',
        '14' => 'YYYYAAGGTssddss',
        '20' => 'YYYYAAGG (H)',
        '21' => 'YYYYAA (H)',
        '25' => 'YYYY (H)',
        '32' => 'Metin (H)',
    ];

}
