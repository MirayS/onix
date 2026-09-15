<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 100 — Discount code type
 *
 * @see https://ns.editeur.org/onix/en/100
 */
class CodeList100 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'BIC discount group code',
        '02' => 'Proprietary discount code scheme',
        '03' => 'Boeksoort',
        '04' => 'German terms code',
        '05' => 'Proprietary commission code scheme',
        '06' => 'BIC commission group code',
        '07' => 'ISNI-based discount group code',
    ];

    protected static array $es = [
        '01' => 'Código de grupo de descuento BIC',
        '02' => 'Código de descuento propio',
        '03' => 'Boeksoort',
        '04' => 'Código de condiciones de Alemania',
        '05' => 'Código de comisión propio',
        '06' => 'Código de grupo de comisión BIC',
        '07' => 'Código de descuento basado en ISNI',
    ];

    protected static array $de = [
        '01' => 'BIC discount group code',
        '02' => 'Proprietary discount code',
        '03' => 'Boeksoort',
        '04' => 'German terms code',
        '05' => 'Proprietary commission code',
        '06' => 'BIC commission group code',
        '07' => 'ISNI-based discount group code',
    ];

    protected static array $fr = [
        '01' => 'Code de remise BIC',
        '02' => 'Code remise propriétaire',
        '03' => 'Boeksoort',
        '04' => 'Code conditions allemand',
        '05' => 'Code commission propriétaire',
        '06' => 'Code de commission BIC',
        '07' => 'Code de remise basé sur l’ISNI',
    ];

    protected static array $it = [
        '01' => 'BIC discount group code',
        '02' => 'Codice di sconto proprietario',
        '03' => 'Boeksoort',
        '04' => 'Codice delle condizioni tedesche',
        '05' => 'Codice di commissione proprietario',
        '06' => 'BIC commission group code',
        '07' => 'Codice per gruppo di sconto basati su ISNI',
    ];

    protected static array $nb = [
        '01' => 'BIC discount group code',
        '02' => 'Proprietary discount code',
        '03' => 'Boeksoort',
        '04' => 'German terms code',
        '05' => 'Proprietary commission code',
        '06' => 'BIC commission group code',
        '07' => 'ISNI-based discount group code',
    ];

    protected static array $tr = [
        '01' => 'BIC iskonto grup kodu',
        '02' => 'Tescilli iskonto kodu',
        '03' => 'Boeksoort',
        '04' => 'Alman şart kodu',
        '05' => 'Tescilli komisyon kodu',
        '06' => 'BIC komisyon grup kodu',
        '07' => 'ISNI-based discount group code',
    ];

}
