<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 86 — Bible text organization
 *
 * @see https://ns.editeur.org/onix/en/86
 */
class CodeList86 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'CHR' => 'Chronological',
        'CHA' => 'Chain reference',
        'INT' => 'Interlinear',
        'PAR' => 'Parallel',
        'STN' => 'Standard',
    ];

    protected static array $es = [
        'CHR' => 'Chronological',
        'CHA' => 'Chain reference',
        'INT' => 'Interlinear',
        'PAR' => 'Parallel',
        'STN' => 'Standard',
    ];

    protected static array $de = [
        'CHR' => 'Chronological',
        'CHA' => 'Chain reference',
        'INT' => 'Interlinear',
        'PAR' => 'Parallel',
        'STN' => 'Standard',
    ];

    protected static array $fr = [
        'CHR' => 'Chronologique',
        'CHA' => 'Références enchaînées',
        'INT' => 'Interlinéaire',
        'PAR' => 'Parallèle',
        'STN' => 'Standard',
    ];

    protected static array $it = [
        'CHR' => 'Cronologica',
        'CHA' => 'Riferimenti concatenati',
        'INT' => 'Interlineare',
        'PAR' => 'Parallela',
        'STN' => 'Standard',
    ];

    protected static array $nb = [
        'CHR' => 'Chronological',
        'CHA' => 'Chain reference',
        'INT' => 'Interlinear',
        'PAR' => 'Parallel',
        'STN' => 'Standard',
    ];

    protected static array $tr = [
        'CHR' => 'Kronolojik',
        'CHA' => 'Zincirleme başvuru',
        'INT' => 'Satır arası',
        'PAR' => 'Paralel',
        'STN' => 'Standart',
    ];

}
