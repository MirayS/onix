<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 179 — Price code type
 *
 * @see https://ns.editeur.org/onix/en/179
 */
class CodeList179 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary price coding scheme',
        '02' => 'Finnish Pocket Book price code',
        '03' => 'Finnish Miki Book price code',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'Código de precio para libros de bolsillo en Finlandia',
        '03' => 'Código de precio para «Miki Books» en Finlandia',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'Finnish Pocket Book price code',
        '03' => 'Finnish Miki Book price code',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Code de prix des Pocket Books finlandais',
        '03' => 'Code de prix des Miki Books finlandais',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Codice prezzo Finnish Pocket Book',
        '03' => 'Codice prezzo Finnish Miki Book',
    ];

    protected static array $nb = [
        '01' => 'Proprietary',
        '02' => 'Finnish Pocket Book price code',
        '03' => 'Finnish Miki Book price code',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'Fin Cep Kitapı fiyat kodu',
        '03' => 'Finlandiya Miki Kitap fiyatı kodu',
    ];

}
