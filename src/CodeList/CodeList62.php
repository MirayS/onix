<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 62 — Tax rate type
 *
 * @see https://ns.editeur.org/onix/en/62
 */
class CodeList62 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'H' => 'Higher rate',
        'P' => 'Tax paid at source (Italy)',
        'R' => 'Lower rate',
        'S' => 'Standard rate',
        'T' => 'Super-low rate',
        'Z' => 'Zero-rated',
    ];

    protected static array $es = [
        'H' => 'Tipo superior',
        'P' => 'Impuesto pagado en origen (Italia)',
        'R' => 'Tipo inferior',
        'S' => 'Tipo normal',
        'T' => 'Tipo super bajo',
        'Z' => 'Tipo cero',
    ];

    protected static array $de = [
        'H' => 'Higher rate',
        'P' => 'Tax paid at source (Italy)',
        'R' => 'Lower rate',
        'S' => 'Standard rate',
        'T' => 'Super-low rate',
        'Z' => 'Zero-rated',
    ];

    protected static array $fr = [
        'H' => 'Taux majoré',
        'P' => 'Taxe payée à la source (Italie)',
        'R' => 'Taux réduit',
        'S' => 'Taux normal',
        'T' => 'Taux super réduit',
        'Z' => 'Taux zéro',
    ];

    protected static array $it = [
        'H' => 'Aliquota superiore',
        'P' => 'Assolta alla fonte (Italia)',
        'R' => 'Aliquota inferiore',
        'S' => 'Aliquota standard',
        'T' => 'Aliquota minima',
        'Z' => 'Esentasse',
    ];

    protected static array $nb = [
        'H' => 'Høyere sats',
        'P' => 'Mva. betalt av forlaget (Italia)',
        'R' => 'Lav sats',
        'S' => 'Standard sats',
        'T' => 'Superlav sats',
        'Z' => 'Uten mva.',
    ];

    protected static array $tr = [
        'H' => 'Yüksek oran',
        'P' => 'Kaynakta kesilen vergi (İtalya)',
        'R' => 'Düşük oran',
        'S' => 'Standart oran',
        'T' => 'Super-low rate',
        'Z' => 'Sıfır oran',
    ];

}
