<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 243 — Dangerous goods regulations
 *
 * @see https://ns.editeur.org/onix/en/243
 */
class CodeList243 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Inapplicable',
        '01' => 'GHS',
        '02' => 'Transport',
        '03' => 'Storage',
        '04' => 'Waste',
        '05' => 'Other',
        '06' => 'Safety data sheet available',
    ];

    protected static array $es = [
        '00' => 'No es de aplicación',
        '01' => 'GHS',
        '02' => 'Transporte',
        '03' => 'Almacenaje',
        '04' => 'Residuos',
        '05' => 'Otros',
        '06' => 'Ficha de datos de seguridad disponible',
    ];

    protected static array $de = [
        '00' => 'Inapplicable',
        '01' => 'GHS',
        '02' => 'Transport',
        '03' => 'Storage',
        '04' => 'Waste',
        '05' => 'Other',
        '06' => 'Safety data sheet available',
    ];

    protected static array $fr = [
        '00' => 'Inapplicable',
        '01' => 'SGH',
        '02' => 'Transport',
        '03' => 'Stockage',
        '04' => 'Elimination',
        '05' => 'Autre',
        '06' => 'Fiche de données de sécurité disponible',
    ];

    protected static array $it = [
        '00' => 'Non applicabile',
        '01' => 'GHS',
        '02' => 'Trasporto',
        '03' => 'Stoccaggio',
        '04' => 'Smaltimento',
        '05' => 'Altro',
        '06' => 'Scheda di sicurezza disponibile',
    ];

    protected static array $nb = [
        '00' => 'Inapplicable',
        '01' => 'GHS',
        '02' => 'Transport',
        '03' => 'Storage',
        '04' => 'Waste',
        '05' => 'Other',
        '06' => 'Safety data sheet available',
    ];

    protected static array $tr = [
        '00' => 'Inapplicable',
        '01' => 'GHS',
        '02' => 'Transport',
        '03' => 'Storage',
        '04' => 'Waste',
        '05' => 'Other',
        '06' => 'Safety data sheet available',
    ];

}
