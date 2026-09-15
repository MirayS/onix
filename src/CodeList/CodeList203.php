<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 203 — ONIX Adult Audience rating
 *
 * @see https://ns.editeur.org/onix/en/203
 */
class CodeList203 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unrated',
        '01' => 'Any adult audience',
        '02' => 'Content advice',
        '03' => 'Content advice (sex)',
        '04' => 'Content advice (violence)',
        '05' => 'Content advice (drugs)',
        '06' => 'Content advice (language)',
        '07' => 'Content advice (intolerance)',
        '08' => 'Content advice (abuse)',
        '09' => 'Content advice (self-harm)',
        '10' => 'Content advice (animal cruelty)',
        '11' => 'Content advice (illness)',
        '12' => 'Content advice (death and grief)',
        '13' => 'Content advice (suicide)',
    ];

    protected static array $es = [
        '00' => 'Sin calificar',
        '01' => 'Para cualquier público adulto',
        '02' => 'Aviso de contenido',
        '03' => 'Aviso de contenido (sexo)',
        '04' => 'Aviso de contenido (violencia)',
        '05' => 'Aviso de contenido (drogas)',
        '06' => 'Aviso de contenido (lenguaje)',
        '07' => 'Aviso de contenido (intolerancia)',
        '08' => 'Aviso de contenido (abuso)',
        '09' => 'Aviso de contenido (autolesiones)',
        '10' => 'Advertencia de contenido (animales)',
    ];

    protected static array $de = [
        '00' => 'Unrated',
        '01' => 'Any adult audience',
        '02' => 'Content warning',
        '03' => 'Content warning (sex)',
        '04' => 'Content warning (violence)',
        '05' => 'Content warning (drug-taking)',
        '06' => 'Content warning (language)',
        '07' => 'Content warning (intolerance)',
        '08' => 'Content warning (abuse)',
        '09' => 'Content warning (self-harm)',
        '10' => 'Content warning (animals)',
    ];

    protected static array $fr = [
        '00' => 'Non évalué',
        '01' => 'Tout public adulte',
        '02' => 'Avertissement de contenu',
        '03' => 'Avertissement de contenu (sexe)',
        '04' => 'Avertissement de contenu (violence)',
        '05' => 'Avertissement de contenu (consommation de drogues)',
        '06' => 'Avertissement de contenu (langage)',
        '07' => 'Avertissement de contenu (intolérance)',
        '08' => 'Avertissement de contenu (abus)',
        '09' => 'Avertissement de contenu (automutilation)',
        '10' => 'Avertissement de contenu (animaux)',
    ];

    protected static array $it = [
        '00' => 'Privo di classificazione',
        '01' => 'Pubblico adulto',
        '02' => 'Avvertenza sul contenuto',
        '03' => 'Avvertenza sul contenuto (sessualmente esplicito)',
        '04' => 'Avvertenza sul contenuto (violenza)',
        '05' => 'Avvertenza sul contenuto (riferimenti a sostanze stupefacenti)',
        '06' => 'Avvertenza sul contenuto (linguaggio)',
        '07' => 'Avvertenza sul contenuto (intolleranza)',
        '08' => 'Avvertenza sul contenuto (abuso)',
        '09' => 'Avvertenza sul contenuto (autolesionismo)',
        '10' => 'Avvertenza sul contenuto (animali)',
    ];

    protected static array $nb = [
        '00' => 'Unrated',
        '01' => 'Any adult audience',
        '02' => 'Content warning',
        '03' => 'Content warning (sex)',
        '04' => 'Content warning (violence)',
        '05' => 'Content warning (drug-taking)',
        '06' => 'Content warning (language)',
        '07' => 'Content warning (intolerance)',
        '08' => 'Content warning (abuse)',
        '09' => 'Content warning (self-harm)',
        '10' => 'Content warning (animals)',
    ];

    protected static array $tr = [
        '00' => 'Derecelendirilmemiş',
        '01' => 'Tüm yetişkin izlerkitle',
        '02' => 'İçerik uyarısı',
        '03' => 'İçerik uyarısı (cinsellik)',
        '04' => 'İçerik uyarısı (şiddet)',
        '05' => 'İçerik uyarısı (uyuşturucu kullanımı)',
        '06' => 'İçerik uyarısı (söylem)',
        '07' => 'İçerik uyarısı (hoşgörüsüzlük)',
        '08' => 'Content warning (abuse)',
        '09' => 'Content warning (self-harm)',
        '10' => 'Content warning (animals)',
    ];

}
