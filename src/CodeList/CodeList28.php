<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 28 — Audience type
 *
 * @see https://ns.editeur.org/onix/en/28
 */
class CodeList28 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'General / adult',
        '02' => 'Children',
        '03' => 'Teenage',
        '04' => 'Primary and secondary education',
        '11' => 'Pre-primary education',
        '12' => 'Primary education',
        '13' => 'Lower secondary education',
        '14' => 'Upper secondary education',
        '05' => 'Tertiary education',
        '06' => 'Professional and scholarly',
        '08' => 'Adult education',
        '07' => 'EFL / TEFL / TESOL',
        '09' => 'Second / additional language teaching',
    ];

    protected static array $es = [
        '01' => 'General / Adultos',
        '02' => 'Infantil / Juvenil',
        '03' => 'Adolescentes',
        '04' => 'Educación preescolar, infantil, primaria, secundaria, bachillerato y formación profesional',
        '11' => 'Educación preescolar',
        '12' => 'Educación primaria',
        '13' => 'Educación secundaria inferior',
        '14' => 'Educación secundaria superior',
        '05' => 'Enseñanza universitaria o superior (terciaria)',
        '06' => 'Profesional / académico',
        '08' => 'Formación de adultos',
        '07' => 'Enseñanza del inglés (ELT / TEFL / TESOL)',
        '09' => 'Enseñanza de segunda lengua',
    ];

    protected static array $de = [
        '01' => 'General / adult',
        '02' => 'Children',
        '03' => 'Teenage',
        '04' => 'Primary and secondary education',
        '11' => 'Pre-primary education',
        '12' => 'Primary education',
        '13' => 'Lower secondary education',
        '14' => 'Upper secondary education',
        '05' => 'Tertiary education',
        '06' => 'Professional and scholarly',
        '08' => 'Adult education',
        '07' => 'EFL / TEFL / TESOL',
        '09' => 'Second / additional language teaching',
    ];

    protected static array $fr = [
        '01' => 'Général / adultes',
        '02' => 'Enfants / jeunesse',
        '03' => 'Adolescents',
        '04' => 'Primary and secondary education',
        '11' => 'Enseignement maternel',
        '12' => 'Enseignement primaire',
        '13' => 'Enseignement secondaire inférieur',
        '14' => 'Enseignement secondaire supérieur',
        '05' => 'Enseignement supérieur',
        '06' => 'Enseignement professionnel et de recherche',
        '08' => 'Enseignement pour adultes',
        '07' => 'EFL / TEFL / TESOL',
        '09' => 'Enseignement de la deuxième (additionnelle) langue',
    ];

    protected static array $it = [
        '01' => 'Generale/Adulti',
        '02' => 'Bambini',
        '03' => 'Adolescenti',
        '04' => 'Istruzione primaria e secondaria',
        '11' => 'Istruzione pre-primaria',
        '12' => 'Istruzione primaria',
        '13' => 'Istruzione secondaria inferiore',
        '14' => 'Istruzione secondaria superiore',
        '05' => 'Istruzione terziaria',
        '06' => 'Prodotto professionale e accademico',
        '08' => 'Formazione degli adulti',
        '07' => 'EFL/TEFL/TESOL',
        '09' => 'Insegnamento di seconde lingue/lingue aggiuntive',
    ];

    protected static array $nb = [
        '01' => 'General / adult',
        '02' => 'Children',
        '03' => 'Teenage',
        '04' => 'Primary and secondary education',
        '11' => 'Pre-primary education',
        '12' => 'Primary education',
        '13' => 'Lower secondary education',
        '14' => 'Upper secondary education',
        '05' => 'Tertiary education',
        '06' => 'Professional and scholarly',
        '08' => 'Adult education',
        '07' => 'ELT/ESL',
        '09' => 'Second language teaching',
    ];

    protected static array $tr = [
        '01' => 'Genel/ticari',
        '02' => 'Çocuk',
        '03' => 'Genç yetişkin',
        '04' => 'İlk ve orta/ilköğretim ve lise',
        '11' => 'Pre-primary education',
        '12' => 'Primary education',
        '13' => 'Lower secondary education',
        '14' => 'Upper secondary education',
        '05' => 'Kolej/yüksek öğrenim',
        '06' => 'Mesleki ve akademik',
        '08' => 'Yetişkin eğitimi',
        '07' => 'ELT/ESL',
        '09' => 'İkinci dil öğretimi',
    ];

}
