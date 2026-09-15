<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 262 — Carbon / GHG emissions certification scheme
 *
 * @see https://ns.editeur.org/onix/en/262
 */
class CodeList262 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '101' => 'Blue Angel',
        '102' => 'Cradle to Cradle',
        '103' => 'Nordic Swan',
        '104' => 'ClimatePartner',
        '105' => 'EU Ecolabel',
        '201' => 'ClimateCalc',
        '202' => 'Canadian SPT / Green Book Alliance Carbon calculator',
        '501' => 'V-Label',
    ];

}
