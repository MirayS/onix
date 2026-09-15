<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 230 — Price constraint type
 *
 * @see https://ns.editeur.org/onix/en/230
 */
class CodeList230 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'No price-specific constraints',
        '01' => 'Preview',
        '02' => 'Print',
        '03' => 'Copy / paste',
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
        '00' => 'Sin restricciones de precio',
        '01' => 'Vista previa',
        '06' => 'Préstamo',
        '07' => 'Licencia por tiempo limitado',
        '08' => 'Renovación de préstamo',
        '09' => 'Licencia multi-usuario',
        '10' => 'Previsualización en una ubicación física',
    ];

    protected static array $de = [
        '00' => 'No price-specific constraints',
        '01' => 'Preview',
        '06' => 'Lend',
        '07' => 'Time-limited license',
        '08' => 'Loan renewal',
        '09' => 'Multi-user license',
        '10' => 'Preview on premises',
    ];

    protected static array $fr = [
        '00' => 'Pas de contrainte spécifique de prix',
        '01' => 'Prévisualisation',
        '06' => 'Prêt',
        '07' => 'Licence à durée limitée',
        '08' => 'Renouvellement du prêt',
        '09' => 'Licence multi-utilisateurs',
        '10' => 'Aperçu sur site',
    ];

    protected static array $it = [
        '00' => 'Nessuna restrizione specifica di prezzo',
        '01' => 'Anteprima',
        '06' => 'Prestito',
        '07' => 'Licenza limitata nel tempo',
        '08' => 'Rinnovo del prestito',
        '09' => 'Licenza multiutente',
        '10' => 'Anteprima in loco',
    ];

    protected static array $nb = [
        '00' => 'Ingen prisspesifikke begrensninger',
        '01' => 'Forhåndsvisning',
        '06' => 'Lån',
        '07' => 'Tidsbegrenset lisens',
        '08' => 'Fornyelse av lån',
        '09' => 'Flerbrukerlisens',
        '10' => 'Forhåndsvisning på lokasjon',
    ];

    protected static array $tr = [
        '00' => 'Sınırlama yok',
        '01' => 'Preview',
        '06' => 'Ödünç verme',
        '07' => 'Sınırlı süreli lisans',
        '08' => 'Ödünç yenileme',
        '09' => 'Çok kullanıcılı lisans',
        '10' => 'Preview on premises',
    ];

}
