<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 240 — AV Item type code
 *
 * @see https://ns.editeur.org/onix/en/240
 */
class CodeList240 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Audiovisual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'End matter',
    ];

    protected static array $es = [
        '01' => 'Obra audiovisual',
        '02' => 'Partes iniciales',
        '03' => 'Cuerpo de la obra',
        '04' => 'Partes finales',
    ];

    protected static array $de = [
        '01' => 'Audiovisual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'End matter',
    ];

    protected static array $fr = [
        '01' => 'Œuvre audiovisuelle',
        '02' => 'Liminaires',
        '03' => 'Corps',
        '04' => 'Final',
    ];

    protected static array $it = [
        '01' => 'Opera audiovisiva',
        '02' => 'Contenuto iniziale',
        '03' => 'Contenuto centrale',
        '04' => 'Contenuto finale',
    ];

    protected static array $nb = [
        '01' => 'Audiovisuelt verk',
        '02' => 'Innledende innhold',
        '03' => 'Hovedinnhold (spor o.l.)',
        '04' => 'Avsluttende innhold',
    ];

    protected static array $tr = [
        '01' => 'Audiovisual work',
        '02' => 'Front matter',
        '03' => 'Body matter',
        '04' => 'End matter',
    ];

}
