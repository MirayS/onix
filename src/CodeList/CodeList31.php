<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 31 — Audience range precision
 *
 * @see https://ns.editeur.org/onix/en/31
 */
class CodeList31 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Exact',
        '03' => 'From',
        '04' => 'To',
    ];

    protected static array $es = [
        '01' => 'Exacta',
        '03' => 'Desde',
        '04' => 'Hasta',
    ];

    protected static array $de = [
        '01' => 'Exact',
        '03' => 'From',
        '04' => 'To',
    ];

    protected static array $fr = [
        '01' => 'Exactement',
        '03' => 'A partir de',
        '04' => 'Jusqu’à',
    ];

    protected static array $it = [
        '01' => 'Esatta',
        '03' => 'Da',
        '04' => 'A',
    ];

    protected static array $nb = [
        '01' => 'Eksakt',
        '03' => 'Fra',
        '04' => 'Til',
    ];

    protected static array $tr = [
        '01' => 'Tam',
        '03' => 'Aralık başlangıcı',
        '04' => 'Aralık sonu',
    ];

}
