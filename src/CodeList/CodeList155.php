<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 155 — Content date role
 *
 * @see https://ns.editeur.org/onix/en/155
 */
class CodeList155 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Publication date',
        '04' => 'Broadcast date',
        '14' => 'From date',
        '15' => 'Until date',
        '17' => 'Last updated',
        '24' => 'From… until date',
        '27' => 'Available from',
        '28' => 'Available until',
        '31' => 'Associated start date',
        '32' => 'Associated end date',
    ];

    protected static array $es = [
        '01' => 'Fecha de publicación',
        '04' => 'Fecha de emisión',
        '14' => 'Fecha desde',
        '15' => 'Fecha hasta',
        '17' => 'Última actualización',
        '24' => 'Fecha desde … hasta',
        '27' => 'Disponible desde',
        '28' => 'Disponible hasta',
        '31' => 'Fecha de comienzo asociada',
        '32' => 'Fecha de finalización asociada',
    ];

    protected static array $de = [
        '01' => 'Publication date',
        '04' => 'Broadcast date',
        '14' => 'From date',
        '15' => 'Until date',
        '17' => 'Last updated',
        '24' => 'From… until date',
        '27' => 'Available from',
        '28' => 'Available until',
        '31' => 'Associated start date',
        '32' => 'Associated end date',
    ];

    protected static array $fr = [
        '01' => 'Date de publication',
        '04' => 'Date de diffusion',
        '14' => 'A partir du',
        '15' => 'Jusqu’au',
        '17' => 'Dernière mise à jour le',
        '24' => 'A partir du… jusqu’au',
        '27' => 'Disponible à partir du',
        '28' => 'Disponible jusqu’au',
        '31' => 'Date de début associée',
        '32' => 'Date de fin associée',
    ];

    protected static array $it = [
        '01' => 'Data di pubblicazione',
        '04' => 'Data di diffusione pubblica',
        '14' => 'Dalla data',
        '15' => 'Alla data',
        '17' => 'Data ultimo aggiornamento',
        '24' => 'Dalla data... alla data',
        '27' => 'Disponibile dalla data',
        '28' => 'Disponibile fino alla data',
        '31' => 'Data di inizio associata',
        '32' => 'Data di fine associata',
    ];

    protected static array $nb = [
        '01' => 'Utgivelsesdato',
        '04' => 'Kringkastingsdato',
        '14' => 'Fra og med-dato',
        '15' => 'Til og med-dato',
        '17' => 'Sist oppdatert',
        '24' => 'Fra-til dato',
        '27' => 'Tilgjengelig fra',
        '28' => 'Tilgjengelig til',
        '31' => 'Associated start date',
        '32' => 'Associated end date',
    ];

    protected static array $tr = [
        '01' => 'Yayın tarihi',
        '04' => 'Yayın (tv-radyo) tarihi',
        '14' => 'Şu tarihten itibaren',
        '15' => 'Şu tarihe kadar',
        '17' => 'Son güncelleme',
        '24' => 'Şu tarihten ... şu tarihe kadar',
        '27' => 'Erişilebilirlik başlangıcı',
        '28' => 'Erişilebilirlik sonu',
        '31' => 'İlişkili başlangıç tarihi',
        '32' => 'İlişkili bitiş tarihi',
    ];

}
