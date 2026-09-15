<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 102 — Sales outlet identifier type
 *
 * @see https://ns.editeur.org/onix/en/102
 */
class CodeList102 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary sales outlet ID scheme',
        '03' => 'ONIX retail sales outlet ID code',
        '04' => 'Retail sales outlet GLN',
        '05' => 'Retail sales outlet SAN',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '03' => 'Código de identificación ONIX del punto de venta a usuarios finales',
        '04' => 'Identificador GLN del punto de venta',
        '05' => 'Identificador SAN del punto de venta',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '03' => 'ONIX retail sales outlet ID code',
        '04' => 'Retail sales outlet GLN',
        '05' => 'Retail sales outlet SAN',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '03' => 'Code ID point de vente au détail ONIX',
        '04' => 'GLN du point de vente au détail',
        '05' => 'SAN du point de vente au détail',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '03' => 'Codice identificativo ONIX del punto vendita al dettaglio',
        '04' => 'GLN del punto vendita al dettaglio',
        '05' => 'SAN del punto vendita al dettaglio',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '03' => 'ONIX retail sales outlet ID code',
        '04' => 'GLN for forhandler/utsalgssted',
        '05' => 'SAN for forhandler/utsalgssted',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '03' => 'ONIX perakende satış noktası kimliği kodu',
        '04' => 'Retail sales outlet GLN',
        '05' => 'Retail sales outlet SAN',
    ];

}
