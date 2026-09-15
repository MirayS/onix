<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 259 — Collection frequency code
 *
 * @see https://ns.editeur.org/onix/en/259
 */
class CodeList259 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'u' => 'Unknown',
        'i' => 'Irregular',
        'r' => 'Regular',
        'e' => 'Biennial',
        'a' => 'Annual',
        'b' => 'Biannual',
        't' => 'Triannual',
        'q' => 'Quarterly',
        's' => 'Bimonthly',
        'm' => 'Monthly',
        'f' => 'Fortnightly',
        'w' => 'Weekly',
        'd' => 'Daily, or more frequently than weekly',
        'x' => 'No future publications',
    ];

    protected static array $es = [
        'u' => 'Desconocido',
        'i' => 'Irregular',
        'e' => 'Bienal',
        'a' => 'Anual',
        'b' => 'Bianual',
        't' => 'Trianual',
        'q' => 'Trimestral',
        's' => 'Bimestral',
        'm' => 'Mensual',
        'f' => 'Quincenal',
        'w' => 'Semanal',
        'd' => 'Más frecuente que semanal',
        'x' => 'Sin publicaciones futuras',
    ];

    protected static array $de = [
        'u' => 'Unknown',
        'i' => 'Irregular',
        'e' => 'Biennial',
        'a' => 'Annual',
        'b' => 'Biannual',
        't' => 'Triannual',
        'q' => 'Quarterly',
        's' => 'Bimonthly',
        'm' => 'Monthly',
        'f' => 'Fortnightly',
        'w' => 'Weekly',
        'd' => 'More frequently than weekly',
        'x' => 'No future publications',
    ];

    protected static array $fr = [
        'u' => 'Unknown',
        'i' => 'Irregular',
        'e' => 'Biennial',
        'a' => 'Annual',
        'b' => 'Biannual',
        't' => 'Triannual',
        'q' => 'Quarterly',
        's' => 'Bimonthly',
        'm' => 'Monthly',
        'f' => 'Fortnightly',
        'w' => 'Weekly',
        'd' => 'More frequently than weekly',
        'x' => 'No future publications',
    ];

    protected static array $it = [
        'u' => 'Sconosciuta',
        'i' => 'Irregolare',
        'e' => 'Biennale',
        'a' => 'Annuale',
        'b' => 'Semestrale',
        't' => 'Quadrimestrale',
        'q' => 'Trimestrale',
        's' => 'Bimestrale',
        'm' => 'Mensile',
        'f' => 'Quindicinale',
        'w' => 'Settimanale',
        'd' => 'Più di una volta alla settimana',
        'x' => 'Nessuna pubblicazione futura',
    ];

    protected static array $nb = [
        'u' => 'Unknown',
        'i' => 'Irregular',
        'e' => 'Biennial',
        'a' => 'Annual',
        'b' => 'Biannual',
        't' => 'Triannual',
        'q' => 'Quarterly',
        's' => 'Bimonthly',
        'm' => 'Monthly',
        'f' => 'Fortnightly',
        'w' => 'Weekly',
        'd' => 'More frequently than weekly',
        'x' => 'No future publications',
    ];

    protected static array $tr = [
        'u' => 'Unknown',
        'i' => 'Irregular',
        'e' => 'Biennial',
        'a' => 'Annual',
        'b' => 'Biannual',
        't' => 'Triannual',
        'q' => 'Quarterly',
        's' => 'Bimonthly',
        'm' => 'Monthly',
        'f' => 'Fortnightly',
        'w' => 'Weekly',
        'd' => 'More frequently than weekly',
        'x' => 'No future publications',
    ];

}
