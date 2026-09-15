<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 247 — Event occurrence date role
 *
 * @see https://ns.editeur.org/onix/en/247
 */
class CodeList247 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Date of occurrence',
        '02' => 'Date of occurrence end',
    ];

    protected static array $es = [
        '01' => 'Fecha de celebración',
        '02' => 'Fecha de final de celebración',
    ];

    protected static array $de = [
        '01' => 'Date of occurrence',
        '02' => 'Date of occurrence end',
    ];

    protected static array $fr = [
        '01' => 'Date de l’événement',
        '02' => 'Date de fin de l’événement',
    ];

    protected static array $it = [
        '01' => 'Data dell’evento',
        '02' => 'Data di fine dell’evento',
    ];

    protected static array $nb = [
        '01' => 'Date of occurrence',
        '02' => 'Date of occurrence end',
    ];

    protected static array $tr = [
        '01' => 'Date of occurrence',
        '02' => 'Date of occurrence end',
    ];

}
