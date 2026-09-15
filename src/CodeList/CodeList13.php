<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 13 — Collection identifier type
 *
 * @see https://ns.editeur.org/onix/en/13
 */
class CodeList13 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary collection ID scheme',
        '02' => 'ISSN',
        '03' => 'German National Bibliography series ID',
        '04' => 'German Books in Print series ID',
        '05' => 'Electre series ID',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '27' => 'JP Magazine ID',
        '29' => 'BNF Control number',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'ISSN',
        '03' => 'Identificador de colección de la Deutsche Bibliothek',
        '04' => 'Identificador de colección para libros alemanes en venta',
        '05' => 'Identificador de colección Electre',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'Número de control de la BNF',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'ISSN',
        '03' => 'German National Bibliography series ID',
        '04' => 'German Books in Print series ID',
        '05' => 'Electre series ID',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'BNF Control number',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'ISSN',
        '03' => 'Identifiant des publications en série de la bibliographie nationale allemande',
        '04' => 'Identifiant des publications en série allemandes',
        '05' => 'Identifiant Electre des publications en série',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'Numéro de contrôle BnF',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'ISSN',
        '03' => 'German National Bibliography series ID',
        '04' => 'German Books in Print series ID',
        '05' => 'Electre series ID',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'Identifiant BNF des publications en série',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'ISSN',
        '03' => 'German National Bibliography series ID',
        '04' => 'German Books in Print series ID',
        '05' => 'Electre series ID',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'BNF Control number',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'ISSN',
        '03' => 'Alman Ulusal Bibliyografya dizi kimliği',
        '04' => 'German Books in Print (Almanca Yayın Kataloğu) dizi kimliği',
        '05' => 'Electre dizi kimliği',
        '06' => 'DOI',
        '15' => 'ISBN-13',
        '22' => 'URN',
        '29' => 'Identifiant BNF des publications en série',
        '35' => 'ARK',
        '38' => 'ISSN-L',
    ];

}
