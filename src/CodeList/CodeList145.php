<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 145 — Usage type
 *
 * @see https://ns.editeur.org/onix/en/145
 */
class CodeList145 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'No constraints',
        '01' => 'Preview',
        '02' => 'Print',
        '03' => 'Copy / paste',
        '04' => 'Share',
        '05' => 'Text to speech',
        '06' => 'Lend',
        '07' => 'Time-limited license',
        '08' => 'Library loan renewal',
        '09' => 'Multi-user license',
        '10' => 'Preview on premises',
        '11' => 'Text and data mining',
        '13' => 'TDM for AI to enhance the private purchase experience',
        '14' => 'TDM for AI to enhance the private reading experience',
        '16' => 'Library loan',
    ];

    protected static array $es = [
        '00' => 'Sin restricciones',
        '01' => 'Vista previa',
        '02' => 'Imprimir',
        '03' => 'Copiar / Pegar',
        '04' => 'Compartir',
        '05' => 'Texto a voz',
        '06' => 'Préstamo',
        '07' => 'Licencia por tiempo limitado',
        '08' => 'Renovación de préstamo',
        '09' => 'Licencia multi-usuario',
        '10' => 'Previsualización en una ubicación física',
    ];

    protected static array $de = [
        '00' => 'No constraints',
        '01' => 'Preview',
        '02' => 'Print',
        '03' => 'Copy / paste',
        '04' => 'Share',
        '05' => 'Text to speech',
        '06' => 'Lend',
        '07' => 'Time-limited license',
        '08' => 'Loan renewal',
        '09' => 'Multi-user license',
        '10' => 'Preview on premises',
    ];

    protected static array $fr = [
        '00' => 'Pas de contrainte',
        '01' => 'Aperçu',
        '02' => 'Impression',
        '03' => 'Copier / coller',
        '04' => 'Partager',
        '05' => 'Synthèse vocale',
        '06' => 'Prêt',
        '07' => 'Licence avec limite de durée',
        '08' => 'Renouvellement du prêt',
        '09' => 'Licence multi-utilisateurs',
        '10' => 'Aperçu sur site',
    ];

    protected static array $it = [
        '00' => 'Nessuna restrizione',
        '01' => 'Anteprima',
        '02' => 'Stampa',
        '03' => 'Copia e incolla',
        '04' => 'Condivisione',
        '05' => 'Da testo a voce',
        '06' => 'Prestito',
        '07' => 'Licenza limitata nel tempo',
        '08' => 'Rinnovo del prestito',
        '09' => 'Licenza multiutente',
        '10' => 'Anteprima in loco',
    ];

    protected static array $nb = [
        '00' => 'Ingen begrensninger',
        '01' => 'Forhåndsvisning',
        '02' => 'Utskrift',
        '03' => 'Kopier/lim inn',
        '04' => 'Del',
        '05' => 'Tekst til tale',
        '06' => 'Lån',
        '07' => 'Tidsbegrenset lisens',
        '08' => 'Fornyelse av lån',
        '09' => 'Flerbrukerlisens',
        '10' => 'Forhåndvisning på lokasjon',
    ];

    protected static array $tr = [
        '00' => 'No constraints',
        '01' => 'Önizleme',
        '02' => 'Baskı',
        '03' => 'Kopyala / yapıştır',
        '04' => 'Paylaşım',
        '05' => 'Metinden konuşmaya',
        '06' => 'Ödünç',
        '07' => 'Sınırlı süreli lisans',
        '08' => 'Ödünç yenileme',
        '09' => 'Çok kullanıcılı lisans',
        '10' => 'Preview on premises',
    ];

}
