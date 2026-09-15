<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 215 — Proximity
 *
 * @see https://ns.editeur.org/onix/en/215
 */
class CodeList215 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Less than',
        '02' => 'Not more than',
        '03' => 'Exactly',
        '04' => 'Approximately',
        '05' => 'About',
        '06' => 'Not less than',
        '07' => 'More than',
    ];

    protected static array $es = [
        '01' => 'Menor que',
        '02' => 'No mayor que',
        '03' => 'Exactamente',
        '04' => 'Aproximadamente',
        '05' => 'Alrededor de',
        '06' => 'No menor que',
        '07' => 'Mayor que',
    ];

    protected static array $de = [
        '01' => 'Less than',
        '02' => 'Not more than',
        '03' => 'Exactly',
        '04' => 'Approximately',
        '05' => 'About',
        '06' => 'Not less than',
        '07' => 'More than',
    ];

    protected static array $fr = [
        '01' => 'Moins de',
        '02' => 'Pas plus de',
        '03' => 'Exactement',
        '04' => 'Approximativement',
        '05' => 'Environ',
        '06' => 'Pas moins de',
        '07' => 'Plus de',
    ];

    protected static array $it = [
        '01' => 'Minore di',
        '02' => 'Non più di',
        '03' => 'Esattamente',
        '04' => 'Approssimativamente',
        '05' => 'Circa',
        '06' => 'Non meno di',
        '07' => 'Più di',
    ];

    protected static array $nb = [
        '01' => 'Less than',
        '02' => 'Not more than',
        '03' => 'Exactly',
        '04' => 'Approximately',
        '05' => 'About',
        '06' => 'Not less than',
        '07' => 'More than',
    ];

    protected static array $tr = [
        '01' => 'Daha az',
        '02' => 'En fazla',
        '03' => 'Tam',
        '04' => 'Yaklaşık olarak',
        '05' => 'Civarında',
        '06' => 'En az',
        '07' => 'Daha fazla',
    ];

}
