<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 89 — Religious text feature type
 *
 * @see https://ns.editeur.org/onix/en/89
 */
class CodeList89 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Church season or activity',
    ];

    protected static array $es = [
        '01' => 'Fecha o actividad litúrgica',
    ];

    protected static array $de = [
        '01' => 'Church season or activity',
    ];

    protected static array $fr = [
        '01' => 'Saison ou activité de l’église',
    ];

    protected static array $it = [
        '01' => 'Attività o calendarizzazione religiose',
    ];

    protected static array $nb = [
        '01' => 'Church season or activity',
    ];

    protected static array $tr = [
        '01' => 'Kilise dönemi ya da etkinliği',
    ];

}
