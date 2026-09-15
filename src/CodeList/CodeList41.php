<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 41 — Prize or award achievement
 *
 * @see https://ns.editeur.org/onix/en/41
 */
class CodeList41 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Winner',
        '02' => 'Runner-up',
        '03' => 'Commended',
        '04' => 'Short-listed',
        '05' => 'Long-listed',
        '06' => 'Joint winner',
        '07' => 'Nominated',
    ];

    protected static array $es = [
        '01' => 'Ganador',
        '02' => 'Segundo clasificado',
        '03' => 'Mencionado',
        '04' => 'Finalista',
        '05' => 'Seleccionado',
        '06' => 'Ganador ex aequo',
        '07' => 'Nominado',
    ];

    protected static array $de = [
        '01' => 'Winner',
        '02' => 'Runner-up',
        '03' => 'Commended',
        '04' => 'Short-listed',
        '05' => 'Long-listed',
        '06' => 'Joint winner',
        '07' => 'Nominated',
    ];

    protected static array $fr = [
        '01' => 'Lauréat',
        '02' => 'Deuxième',
        '03' => 'Mention spéciale',
        '04' => 'Short-listé',
        '05' => 'Long-listé',
        '06' => 'Lauréat ex-æquo',
        '07' => 'Nominé',
    ];

    protected static array $it = [
        '01' => 'Vincitore',
        '02' => 'Secondo classificato',
        '03' => 'Segnalato',
        '04' => 'Finalista',
        '05' => 'Selezionato',
        '06' => 'Co-vincitore',
        '07' => 'Nominato',
    ];

    protected static array $nb = [
        '01' => 'Winner',
        '02' => 'Runner-up',
        '03' => 'Commended',
        '04' => 'Short-listed',
        '05' => 'Long-listed',
        '06' => 'Joint winner',
        '07' => 'Nominated',
    ];

    protected static array $tr = [
        '01' => 'Kazanan',
        '02' => 'İkinci',
        '03' => 'Övgüye değer',
        '04' => 'Kısa listede',
        '05' => 'Uzun listede',
        '06' => 'Ortak kazanan',
        '07' => 'Aday',
    ];

}
