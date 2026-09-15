<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 18 — Person / organization name type
 *
 * @see https://ns.editeur.org/onix/en/18
 */
class CodeList18 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unspecified',
        '01' => 'Pseudonym',
        '02' => 'Authority-controlled name',
        '03' => 'Earlier name',
        '04' => '‘Real’ name',
        '05' => 'Transliterated / translated form of primary name',
        '06' => 'Later name',
        '07' => 'Fictional character name',
        '08' => 'Acronym / initialism',
        '09' => 'Professional name',
    ];

    protected static array $es = [
        '00' => 'No especificado',
        '01' => 'Seudónimo',
        '02' => 'Nombre controlado por una autoridad',
        '03' => 'Nombre anterior',
        '04' => 'Nombre real',
        '05' => 'Forma transliterada / traducida del nombre principal',
        '06' => 'Nombre posterior',
        '07' => 'Nombre de personaje ficticio',
    ];

    protected static array $de = [
        '00' => 'Unspecified',
        '01' => 'Pseudonym',
        '02' => 'Authority-controlled name',
        '03' => 'Earlier name',
        '04' => '‘Real’ name',
        '05' => 'Transliterated / translated form of primary name',
        '06' => 'Later name',
        '07' => 'Fictional character name',
    ];

    protected static array $fr = [
        '00' => 'Non spécifié',
        '01' => 'Pseudonyme',
        '02' => 'Nom autorité contrôlé',
        '03' => 'Nom antérieur',
        '04' => 'Nom « réel »',
        '05' => 'Forme transcrite/traduite du nom principal',
        '06' => 'Dernière forme du nom',
        '07' => 'Nom de personnage de fiction',
    ];

    protected static array $it = [
        '00' => 'Non specificato',
        '01' => 'Pseudonimo',
        '02' => 'Nome controllato appartenente a una lista di autorità',
        '03' => 'Nome precedente',
        '04' => 'Nome «reale»',
        '05' => 'Nome traslitterato/tradotto',
        '06' => 'Nome successivo',
        '07' => 'Nome del personaggio di fantasia',
    ];

    protected static array $nb = [
        '00' => 'Uspesifisert',
        '01' => 'Pseudonym',
        '02' => 'Autoritetskontrollert navn',
        '03' => 'Tidligere navn',
        '04' => 'Virkelig navn',
        '05' => 'Transkripsjon / oversettelse fra primært navn',
        '06' => 'Senere navn',
        '07' => 'Navn på fiktiv karakter',
    ];

    protected static array $tr = [
        '00' => 'Belirtilmemiş',
        '01' => 'Müstear isim',
        '02' => 'Otorite denetimli isim',
        '03' => 'Önceki isim',
        '04' => '‘Gerçek’ isim',
        '05' => 'Asıl ismin çeviriyazım biçimi',
        '06' => 'Sonraki adı',
        '07' => 'Fictional character name',
    ];

}
