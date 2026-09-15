<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 87 — Bible reference location
 *
 * @see https://ns.editeur.org/onix/en/87
 */
class CodeList87 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'CCL' => 'Center column',
        'PGE' => 'Page end',
        'SID' => 'Side column',
        'VER' => 'Verse end',
        'UNK' => 'Unknown',
        'ZZZ' => 'Other',
    ];

    protected static array $es = [
        'CCL' => 'Center column',
        'PGE' => 'Page end',
        'SID' => 'Side column',
        'VER' => 'Verse end',
        'UNK' => 'Unknown',
        'ZZZ' => 'Other',
    ];

    protected static array $de = [
        'CCL' => 'Center column',
        'PGE' => 'Page end',
        'SID' => 'Side column',
        'VER' => 'Verse end',
        'UNK' => 'Unknown',
        'ZZZ' => 'Other',
    ];

    protected static array $fr = [
        'CCL' => 'Colonne centrale',
        'PGE' => 'Fin de page',
        'SID' => 'Colonne latérale',
        'VER' => 'Fin de verset',
        'UNK' => 'Inconnue',
        'ZZZ' => 'Autres',
    ];

    protected static array $it = [
        'CCL' => 'Colonna centrale',
        'PGE' => 'Fine pagina',
        'SID' => 'Colonna laterale',
        'VER' => 'Fine del versetto',
        'UNK' => 'Non conosciuta',
        'ZZZ' => 'Altra',
    ];

    protected static array $nb = [
        'CCL' => 'Center column',
        'PGE' => 'Page end',
        'SID' => 'Side column',
        'VER' => 'Verse end',
        'UNK' => 'Unknown',
        'ZZZ' => 'Other',
    ];

    protected static array $tr = [
        'CCL' => 'Orta sütun',
        'PGE' => 'Sayfa sonu',
        'SID' => 'Yan sütun',
        'VER' => 'Ayet sonu',
        'UNK' => 'Bilinmeyen',
        'ZZZ' => 'Diğer',
    ];

}
