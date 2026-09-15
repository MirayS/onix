<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 144 — E-publication technical protection
 *
 * @see https://ns.editeur.org/onix/en/144
 */
class CodeList144 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'None',
        '01' => 'DRM',
        '02' => 'Digital watermarking',
        '03' => 'Adobe DRM',
        '04' => 'Apple DRM',
        '05' => 'OMA DRM',
        '06' => 'Readium LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $es = [
        '00' => 'Ninguno',
        '01' => 'DRM',
        '02' => 'Marca de agua digital',
        '03' => 'DRM de Adobe',
        '04' => 'DRM de Apple',
        '05' => 'DRM de OMA',
        '06' => 'LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $de = [
        '00' => 'None',
        '01' => 'DRM',
        '02' => 'Digital watermarking',
        '03' => 'Adobe DRM',
        '04' => 'Apple DRM',
        '05' => 'OMA DRM',
        '06' => 'Readium LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $fr = [
        '00' => 'Aucune',
        '01' => 'DRM',
        '02' => 'Filigrane numérique',
        '03' => 'Adobe DRM',
        '04' => 'Apple DRM',
        '05' => 'OMA DRM',
        '06' => 'LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $it = [
        '00' => 'Nessuna',
        '01' => 'DRM',
        '02' => 'Filigrana digitale',
        '03' => 'DRM di Adobe',
        '04' => 'DRM di Apple',
        '05' => 'DRM di OMA',
        '06' => 'Readium LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $nb = [
        '00' => 'Ingen',
        '01' => 'DRM',
        '02' => 'Vannmerking',
        '03' => 'Adobe DRM',
        '04' => 'Apple DRM',
        '05' => 'OMA DRM',
        '06' => 'Readium LCP DRM',
        '07' => 'Sony DRM',
    ];

    protected static array $tr = [
        '00' => 'Hiçbiri',
        '01' => 'DRM',
        '02' => 'Dijital filigran',
        '03' => 'Adobe DRM',
        '04' => 'Apple DRM',
        '05' => 'OMA DRM',
        '06' => 'LCP DRM',
        '07' => 'Sony DRM',
    ];

}
