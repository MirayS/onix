<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 254 — Resource file date role code
 *
 * @see https://ns.editeur.org/onix/en/254
 */
class CodeList254 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '17' => 'Last updated',
        '27' => 'Available from',
        '28' => 'Available until',
    ];

    protected static array $es = [
        '17' => 'Última actualización',
        '27' => 'Disponible desde',
        '28' => 'Disponible hasta',
    ];

    protected static array $de = [
        '17' => 'Last updated',
        '27' => 'Available from',
        '28' => 'Available until',
    ];

    protected static array $fr = [
        '17' => 'Dernière mise à jour',
        '27' => 'Disponible à partir de',
        '28' => 'Disponible jusqu’au',
    ];

    protected static array $it = [
        '17' => 'Data ultimo aggiornamento',
        '27' => 'Disponibile dalla data',
        '28' => 'Disponibile fino alla data',
    ];

    protected static array $nb = [
        '17' => 'Last updated',
        '27' => 'Available from',
        '28' => 'Available until',
    ];

    protected static array $tr = [
        '17' => 'Last updated',
        '27' => 'Available from',
        '28' => 'Available until',
    ];

}
