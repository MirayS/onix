<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 177 — Person / organization date role
 *
 * @see https://ns.editeur.org/onix/en/177
 */
class CodeList177 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '50' => 'Date of birth',
        '51' => 'Date of death',
        '56' => 'Flourished around',
    ];

    protected static array $es = [
        '50' => 'Fecha de nacimiento',
        '51' => 'Fecha de fallecimiento',
        '56' => 'Floreció durante',
    ];

    protected static array $de = [
        '50' => 'Date of birth',
        '51' => 'Date of death',
        '56' => 'Flourished around',
    ];

    protected static array $fr = [
        '50' => 'Date de naissance',
        '51' => 'Date de mort',
        '56' => 'A prospéré aux environ de',
    ];

    protected static array $it = [
        '50' => 'Data di nascita',
        '51' => 'Data di morte',
        '56' => 'Culmine attorno a',
    ];

    protected static array $nb = [
        '50' => 'Fødselsdato',
        '51' => 'Dødsdato',
        '56' => 'Viktigste periode',
    ];

    protected static array $tr = [
        '50' => 'Doğum tarihi',
        '51' => 'Ölüm tarihi',
        '56' => 'Parladığı dönem',
    ];

}
