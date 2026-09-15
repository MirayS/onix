<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 226 — Record status
 *
 * @see https://ns.editeur.org/onix/en/226
 */
class CodeList226 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'No record errors',
        '01' => 'No record errors – errors in collateral',
        '02' => 'Record with errors',
        '03' => 'Record rejected',
        '09' => 'Reported previously',
    ];

    protected static array $es = [
        '00' => 'No record errors',
        '01' => 'No record errors – errors in collateral',
        '02' => 'Record with errors',
        '03' => 'Record rejected',
        '09' => 'Reported previously',
    ];

    protected static array $de = [
        '00' => 'No record errors',
        '01' => 'No record errors – errors in collateral',
        '02' => 'Record with errors',
        '03' => 'Record rejected',
        '09' => 'Reported previously',
    ];

    protected static array $fr = [
        '00' => 'Pas d’erreurs dans l’enregistrement',
        '01' => 'Pas d’erreur dans l’enregistrement, mais erreurs dans les éléments associés',
        '02' => 'Enregistrement avec erreurs',
        '03' => 'Enregistrement rejeté',
        '09' => 'Signalé précédemment',
    ];

    protected static array $it = [
        '00' => 'Nessun errore nel record',
        '01' => 'Nessun errore nel record – errori nei dati complementari',
        '02' => 'Record con errori',
        '03' => 'Record respinto',
        '09' => 'Segnalato in precedenza',
    ];

    protected static array $nb = [
        '00' => 'No record errors',
        '01' => 'No record errors – errors in collateral',
        '02' => 'Record with errors',
        '03' => 'Record rejected',
        '09' => 'Reported previously',
    ];

    protected static array $tr = [
        '00' => 'No record errors',
        '01' => 'No record errors – errors in collateral',
        '02' => 'Record with errors',
        '03' => 'Record rejected',
        '09' => 'Reported previously',
    ];

}
