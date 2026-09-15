<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 70 — Stock quantity code type
 *
 * @see https://ns.editeur.org/onix/en/70
 */
class CodeList70 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary stock quantity coding scheme',
        '02' => 'APA stock quantity code',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'Código de stock de la APA',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'APA stock quantity code',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Quantité de stock APA',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Codice APA',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'APA stock quantity code',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'APA stok miktarı kodu',
    ];

}
