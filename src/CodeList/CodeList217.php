<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 217 — Price identifier type
 *
 * @see https://ns.editeur.org/onix/en/217
 */
class CodeList217 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary price identifier scheme',
        '02' => 'Proprietary price point identifier scheme',
        '03' => 'Proprietary price type identifier scheme',
        '04' => 'Proprietary price point and type identifier scheme',
        '05' => 'Proprietary unique price identifier scheme',
        '06' => 'Proprietary product price point identifier scheme',
        '07' => 'Proprietary product price type identifier scheme',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'Identificador propio de punto de precio',
        '03' => 'Identificador propio de tipo de precio',
        '04' => 'Identificador propio de punto y tipo de precio',
        '05' => 'Identificador propio único de precio',
        '06' => 'Identificador propio de punto de precio de producto',
        '07' => 'Identificador propio de tipo de precio de producto',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'Proprietary price point identifier',
        '03' => 'Proprietary price type identifier',
        '04' => 'Proprietary price point and type identifier',
        '05' => 'Proprietary unique price identifier',
        '06' => 'Proprietary product price point identifier',
        '07' => 'Proprietary product price type identifier',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Identifiant propriétaire de niveau de prix',
        '03' => 'Identifiant propriétaire de type de prix',
        '04' => 'Identifiant propriétaire de niveau et de type de prix',
        '05' => 'Identifiant propriétaire de prix unique',
        '06' => 'Identifiant propriétaire de niveau de prix du produit',
        '07' => 'Identifiant propriétaire de type de prix du produit',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Identificativo proprietario del prezzo di vendita',
        '03' => 'Identificativo proprietario del tipo di prezzo',
        '04' => 'Identificativo proprietario del prezzo di vendita e del tipo di prezzo',
        '05' => 'Identificativo proprietario univoco del prezzo',
        '06' => 'Identificativo proprietario del prezzo di vendita del prodotto',
        '07' => 'Identificativo proprietario del tipo di prezzo del prodotto',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'Proprietær prisgruppeidentifikator',
        '03' => 'Proprietær pristypeidentifikator',
        '04' => 'Proprietær identifikator for prisgruppe og -type',
        '05' => 'Proprietær, unik prisidentifikator',
        '06' => 'Proprietær prisgruppeidentifikator for et produkt',
        '07' => 'Proprietær pristypeidentifikator for et produkt',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'Özel fiyat noktası tanımlayıcı',
        '03' => 'Özel fiyat tipi tanımlayıcı',
        '04' => 'Özel fiyat noktası ve tipi tanımlayıcı',
        '05' => 'Özel benzersiz fiyat tanımlayıcı',
        '06' => 'Özel ürün fiyat noktası tanımlayıcı',
        '07' => 'Özel ürün fiyat tipi tanımlayıcı',
    ];

}
