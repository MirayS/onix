<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 157 — Content source type
 *
 * @see https://ns.editeur.org/onix/en/157
 */
class CodeList157 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Printed media',
        '02' => 'Website',
        '03' => 'Radio',
        '04' => 'TV',
        '05' => 'Podcast',
        '06' => 'Social media',
        '07' => 'Playlist',
    ];

    protected static array $es = [
        '01' => 'Medio impreso',
        '02' => 'Sitio web',
        '03' => 'Radio',
        '04' => 'TV',
    ];

    protected static array $de = [
        '01' => 'Printed media',
        '02' => 'Website',
        '03' => 'Radio',
        '04' => 'TV',
    ];

    protected static array $fr = [
        '01' => 'Médias imprimés',
        '02' => 'Site web',
        '03' => 'Radio',
        '04' => 'TV',
    ];

    protected static array $it = [
        '01' => 'Stampa',
        '02' => 'Sito internet',
        '03' => 'Radio',
        '04' => 'TV',
    ];

    protected static array $nb = [
        '01' => 'Trykt media',
        '02' => 'Nettsted',
        '03' => 'Radio',
        '04' => 'TV',
    ];

    protected static array $tr = [
        '01' => 'Basılı medya',
        '02' => 'İnternet sitesi',
        '03' => 'Radyo',
        '04' => 'TV',
    ];

}
