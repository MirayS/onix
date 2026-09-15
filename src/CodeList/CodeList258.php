<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 258 — Special finish
 *
 * @see https://ns.editeur.org/onix/en/258
 */
class CodeList258 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Overall matt laminate',
        '02' => 'Overall gloss laminate',
        '03' => 'Overall textured laminate',
    ];

    protected static array $es = [
        '01' => 'Laminado mate',
        '02' => 'Laminado brillante',
    ];

    protected static array $de = [
        '01' => 'Overall matt laminate',
        '02' => 'Overall gloss laminate',
    ];

    protected static array $fr = [
        '01' => 'Pelliculage mat',
        '02' => 'Pelliculage brillant',
    ];

    protected static array $it = [
        '01' => 'Plastificato opaco',
        '02' => 'Plastificato lucido',
    ];

    protected static array $nb = [
        '01' => 'Overall matt laminate',
        '02' => 'Overall gloss laminate',
    ];

    protected static array $tr = [
        '01' => 'Overall matt laminate',
        '02' => 'Overall gloss laminate',
    ];

}
