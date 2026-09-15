<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 171 — Tax type
 *
 * @see https://ns.editeur.org/onix/en/171
 */
class CodeList171 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Value-added tax',
        '02' => 'Sales tax',
        '03' => 'ECO',
    ];

    protected static array $es = [
        '01' => 'IVA',
        '02' => 'IGV (GST)',
        '03' => 'ECO',
    ];

    protected static array $de = [
        '01' => 'VAT',
        '02' => 'GST',
        '03' => 'ECO',
    ];

    protected static array $fr = [
        '01' => 'TVA',
        '02' => 'GST',
        '03' => 'ECO',
    ];

    protected static array $it = [
        '01' => 'IVA',
        '02' => 'GST',
        '03' => 'ECO',
    ];

    protected static array $nb = [
        '01' => 'MVA',
        '02' => 'GST',
        '03' => 'ECO',
    ];

    protected static array $tr = [
        '01' => 'KDV',
        '02' => 'GSV',
        '03' => 'ECO',
    ];

}
