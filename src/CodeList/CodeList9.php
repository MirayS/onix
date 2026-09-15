<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 9 — Product classification type
 *
 * @see https://ns.editeur.org/onix/en/9
 */
class CodeList9 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'WCO Harmonized System',
        '02' => 'UNSPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Sender’s product category',
        '08' => 'GAPP Product Class',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'US Schedule B',
        '15' => 'Clave SAT',
        '16' => 'CN (EU Combined Nomenclature)',
        '17' => 'CCT',
        '18' => 'CACT',
        '19' => 'NICO',
        '20' => 'TARIC additional code',
        '21' => 'HTSUS additional code',
        '22' => 'CPPAP',
        '50' => 'Electre genre',
    ];

    protected static array $es = [
        '01' => 'Sistema Armonizado',
        '02' => 'UNSPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Categoría del producto del remitente',
        '08' => 'Clasificación de productos GAPP',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWIU',
        '13' => 'HTSUS',
        '14' => 'Schedule 8',
        '15' => 'Clave SAT',
        '50' => 'Electre genre',
    ];

    protected static array $de = [
        '01' => 'WCO Harmonized System',
        '02' => 'UNSPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Sender’s product category',
        '08' => 'GAPP Product Class',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'US Schedule B',
        '15' => 'Clave SAT',
        '50' => 'Electre genre',
    ];

    protected static array $fr = [
        '01' => 'Système harmonisé WCO',
        '02' => 'UN SPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Catégorie produit de l’expéditeur',
        '08' => 'Classification produit GAPP',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'Schedule B',
        '15' => 'Clave SAT',
        '50' => 'Genre Electre',
    ];

    protected static array $it = [
        '01' => 'WCO Harmonized System',
        '02' => 'UNSPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Categoria del prodotto del soggetto che invia i dati',
        '08' => 'GAPP Product Class',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'US Schedule B',
        '15' => 'Clave SAT',
        '50' => 'Electre genre',
    ];

    protected static array $nb = [
        '01' => 'WCO Harmonized System',
        '02' => 'UNSPSC',
        '03' => 'HMCE',
        '04' => 'Tysk varefortegnelse for eksportstatistikk',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Sender’s product category',
        '08' => 'GAPP Product Class',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'US Schedule B',
        '15' => 'Clave SAT',
        '50' => 'Electre genre',
    ];

    protected static array $tr = [
        '01' => 'WCO Harmonized System',
        '02' => 'UNSPSC',
        '03' => 'HMRC',
        '04' => 'Warenverzeichnis für die Außenhandelsstatistik',
        '05' => 'TARIC',
        '06' => 'Fondsgroep',
        '07' => 'Göndericinin ürün kategorisi',
        '08' => 'GAPP Ürün Sınıfı',
        '09' => 'CPA',
        '10' => 'NCM',
        '11' => 'CPV',
        '12' => 'PKWiU',
        '13' => 'HTSUS',
        '14' => 'US Schedule B',
        '15' => 'Clave SAT',
        '50' => 'Electre türü',
    ];

}
