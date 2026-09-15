<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 19 — Unnamed person(s)
 *
 * @see https://ns.editeur.org/onix/en/19
 */
class CodeList19 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Unknown',
        '02' => 'Anonymous',
        '03' => 'et al',
        '04' => 'Various',
        '05' => 'Synthesized voice – male',
        '06' => 'Synthesized voice – female',
        '07' => 'Synthesized voice – unspecified',
        '08' => 'Synthesized voice – based on real voice actor',
        '09' => 'AI (Artificial intelligence)',
    ];

    protected static array $es = [
        '01' => 'Desconocido',
        '02' => 'Anónimo',
        '03' => 'y otros (et al)',
        '04' => 'Varios',
        '05' => 'Voz sintetizada: Hombre',
        '06' => 'Voz sintetizada: Mujer',
        '07' => 'Voz sintetizada: Sin especificar',
        '08' => 'Voz sintetizada, basada en la voz real de una persona',
    ];

    protected static array $de = [
        '01' => 'Unknown',
        '02' => 'Anonymous',
        '03' => 'et al',
        '04' => 'Various',
        '05' => 'Synthesised voice – male',
        '06' => 'Synthesised voice – female',
        '07' => 'Synthesised voice – unspecified',
        '08' => 'Synthesised voice – based on real voice actor',
    ];

    protected static array $fr = [
        '01' => 'Inconnu',
        '02' => 'Anonyme',
        '03' => 'et al',
        '04' => 'Auteurs divers',
        '05' => 'Voix synthétique – homme',
        '06' => 'Voix synthétique – femme',
        '07' => 'Voix synthétique – sexe non spécifié',
        '08' => 'Voix synthétique – basée sur la voix d’un acteur',
    ];

    protected static array $it = [
        '01' => 'Sconosciuto',
        '02' => 'Anonimo',
        '03' => 'et al',
        '04' => 'Autori vari',
        '05' => 'Voce sintetizzata – maschile',
        '06' => 'Voce sintetizzata – femminile',
        '07' => 'Voce sintetizzata – genere non specificato',
        '08' => 'Voce sintetizzata – basata su un vero doppiatore',
    ];

    protected static array $nb = [
        '01' => 'Ukjent',
        '02' => 'Anonym',
        '03' => 'et al',
        '04' => 'Forskjellige forfattere',
        '05' => 'Syntetisk stemme - mannlig',
        '06' => 'Syntetisk stemme - kvinnelig',
        '07' => 'Syntetisk stemme - uspesifisert',
        '08' => 'Syntetisk stemme - basert på en virkelig person',
    ];

    protected static array $tr = [
        '01' => 'Bilinmeyen',
        '02' => 'Anonim',
        '03' => 've ark.',
        '04' => 'Çeşitli yazarlar',
        '05' => 'Sentezlenmiş ses – erkek',
        '06' => 'Sentezlenmiş ses – kadın',
        '07' => 'Sentezlenmiş ses – belirtilmemiş',
        '08' => 'Synthesised voice – based on real voice actor',
    ];

}
