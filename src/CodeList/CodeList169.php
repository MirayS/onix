<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 169 — Quantity unit
 *
 * @see https://ns.editeur.org/onix/en/169
 */
class CodeList169 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Units',
        '07' => 'Days',
        '08' => 'Weeks',
        '09' => 'Months',
        '10' => 'Years',
        '20' => 'Classes',
    ];

    protected static array $es = [
        '00' => 'Unidades',
        '07' => 'Días',
        '08' => 'Semanas',
        '09' => 'Meses',
        '10' => 'Años',
        '20' => 'Para clases',
    ];

    protected static array $de = [
        '00' => 'Units',
        '07' => 'Days',
        '08' => 'Weeks',
        '09' => 'Months',
        '10' => 'Years',
        '20' => 'Classes',
    ];

    protected static array $fr = [
        '00' => 'Nombre d’unités',
        '07' => 'Jours',
        '08' => 'Semaines',
        '09' => 'Mois',
        '10' => 'Années',
        '20' => 'Classes',
    ];

    protected static array $it = [
        '00' => 'Unità',
        '07' => 'Giorni',
        '08' => 'Settimane',
        '09' => 'Mesi',
        '10' => 'Anni',
        '20' => 'Classi',
    ];

    protected static array $nb = [
        '00' => 'Units',
        '07' => 'Days',
        '08' => 'Weeks',
        '09' => 'Months',
        '10' => 'Years',
        '20' => 'Classes',
    ];

    protected static array $tr = [
        '00' => 'Birim',
        '07' => 'Gün',
        '08' => 'Hafta',
        '09' => 'Ay',
        '10' => 'Yıl',
        '20' => 'Classes',
    ];

}
