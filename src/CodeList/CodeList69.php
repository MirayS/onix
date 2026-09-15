<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 69 — Agent role
 *
 * @see https://ns.editeur.org/onix/en/69
 */
class CodeList69 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Publisher acts as own sales agent',
        '05' => 'Exclusive sales agent',
        '06' => 'Non-exclusive sales agent',
        '07' => 'Local publisher',
        '08' => 'Sales agent',
    ];

    protected static array $es = [
        '05' => 'Agente de venta exclusivo',
        '06' => 'Agente de venta no exclusivo',
        '07' => 'Editorial local',
        '08' => 'Agente de ventas',
    ];

    protected static array $de = [
        '05' => 'Exclusive sales agent',
        '06' => 'Non-exclusive sales agent',
        '07' => 'Local publisher',
        '08' => 'Sales agent',
    ];

    protected static array $fr = [
        '05' => 'Diffuseur exclusif',
        '06' => 'Diffuseur non exclusif',
        '07' => 'Editeur local',
        '08' => 'Diffuseur',
    ];

    protected static array $it = [
        '05' => 'Agente di vendita esclusivo',
        '06' => 'Agente di vendita non esclusivo',
        '07' => 'Editore locale',
        '08' => 'Agente di vendita',
    ];

    protected static array $nb = [
        '05' => 'Exclusive sales agent',
        '06' => 'Non-exclusive sales agent',
        '07' => 'Local publisher',
        '08' => 'Sales agent',
    ];

    protected static array $tr = [
        '05' => 'İnhisari satış acentesi',
        '06' => 'İnhisari olmayan satış acentesi',
        '07' => 'Yerel yayımcı',
        '08' => 'Satış acentesi',
    ];

}
