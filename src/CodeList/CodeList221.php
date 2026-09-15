<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 221 — Message status
 *
 * @see https://ns.editeur.org/onix/en/221
 */
class CodeList221 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Message received',
        '01' => 'Message rejected',
        '02' => 'Message part-processed',
        '03' => 'Message processed',
    ];

    protected static array $es = [
        '00' => 'Message received',
        '01' => 'Message rejected',
        '02' => 'Message part-processed',
        '03' => 'Message processed',
    ];

    protected static array $de = [
        '00' => 'Message received',
        '01' => 'Message rejected',
        '02' => 'Message part-processed',
        '03' => 'Message processed',
    ];

    protected static array $fr = [
        '00' => 'Message reçu',
        '01' => 'Message rejeté',
        '02' => 'Message partiellement traité',
        '03' => 'Message traité',
    ];

    protected static array $it = [
        '00' => 'Messaggio ricevuto',
        '01' => 'Messaggio respinto',
        '02' => 'Messaggio parzialmente elaborato',
        '03' => 'Messaggio elaborato',
    ];

    protected static array $nb = [
        '00' => 'Message received',
        '01' => 'Message rejected',
        '02' => 'Message part-processed',
        '03' => 'Message processed',
    ];

    protected static array $tr = [
        '00' => 'Message received',
        '01' => 'Message rejected',
        '02' => 'Message part-processed',
        '03' => 'Message processed',
    ];

}
