<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 184 — EU General Product Safety Regulation and Toy Safety Directive hazard warning type
 *
 * @see https://ns.editeur.org/onix/en/184
 */
class CodeList184 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'No warning',
        '01' => 'Carries ‘CE’ logo',
        '02' => 'Carries minimum age warning',
        '03' => 'Carries EU Toy Safety Directive ‘Unsuitable for children ages 0–3’ warning logo',
        '04' => 'Carries EU Toy Safety Directive hazard warning',
        '05' => 'Carries other text associated with toy safety',
        '06' => 'Material Safety Data Sheet available',
        '07' => 'Declaration of Conformity available',
        '08' => 'Carries EN71 conformity statement',
        '09' => 'Carries ‘UKCA’ logo',
    ];

    protected static array $es = [
        '00' => 'Sin avisos de seguridad',
        '01' => 'Incluye el logo «CE»',
        '02' => 'Incluye un aviso de edad mínima',
        '03' => 'Incluye un logo de aviso «No adecuado para niños de entre 0 y 3 años» de acuerdo con la Directiva europea de seguridad de juguetes',
        '04' => 'Incluye un aviso de peligro acorde con la Directiva Europea de seguridad de los juguetes',
        '05' => 'Incluye otro texto relacionado con seguridad de los juguetes',
        '06' => 'Disponible ficha de datos de seguridad',
        '07' => 'Disponible declaración de conformidad',
        '08' => 'Incluye la declaración «Conforme con EN71»',
        '09' => 'Incluye el logo «UKCA»',
    ];

    protected static array $de = [
        '00' => 'No warning',
        '01' => 'Carries ‘CE’ logo',
        '02' => 'Carries minimum age warning',
        '03' => 'Carries EU Toy Safety Directive ‘Unsuitable for children ages 0–3’ warning logo',
        '04' => 'Carries EU Toy Safety Directive hazard warning',
        '05' => 'Carries other text associated with toy safety',
        '06' => 'Material Safety Data Sheet available',
        '07' => 'Declaration of Conformity available',
        '08' => 'Carries EN71 conformity statement',
        '09' => 'Carries ‘UKCA’ logo',
    ];

    protected static array $fr = [
        '00' => 'Aucun avertissement',
        '01' => 'Porte le logo CE',
        '02' => 'Porte un avertissement sur l’âge minimal',
        '03' => 'Porte le logo d’avertissement de la directive de l’UE sur la sécurité des jouets « Ne convient pas aux enfants de 0 à 3 ans »',
        '04' => 'Porte l’avertissement de risque de la directive de l’UE sur la sécurité des jouets',
        '05' => 'Porte un autre texte relatif à la sécurité des jouets',
        '06' => 'Fiche technique disponible sur la sécurité du matériel',
        '07' => 'Déclaration de conformité disponible',
        '08' => 'Porte la déclaration « Conforme à la norme EN71 »',
        '09' => 'Porte le logo UKCA',
    ];

    protected static array $it = [
        '00' => 'Nessuna avvertenza',
        '01' => 'Riporta il logo «EC»',
        '02' => 'Riporta l’indicazione sull’età minima',
        '03' => 'Riporta il logo dell’avvertenza «non indicato per bambini di età inferiore a 3 anni» (Direttiva UE)',
        '04' => 'Riporta l’avvertenza sulla sicurezza dei giocattoli della Direttiva UE',
        '05' => 'Riporta altro testo relativo alla sicurezza del giocattolo',
        '06' => 'Scheda di sicurezza disponibile',
        '07' => 'Dichiarazione di conformità disponibile',
        '08' => 'Contiene la dichiarazione di conformità EN71',
        '09' => 'Riporta il logo «UKCA»',
    ];

    protected static array $nb = [
        '00' => 'No warning',
        '01' => 'Carries ‘CE’ logo',
        '02' => 'Carries minimum age warning',
        '03' => 'Carries EU Toy Safety Directive ‘Unsuitable for children ages 0–3’ warning logo',
        '04' => 'Carries EU Toy Safety Directive hazard warning',
        '05' => 'Carries other text associated with toy safety',
        '06' => 'Material Safety Data Sheet available',
        '07' => 'Declaration of Conformity available',
        '08' => 'Carries EN71 conformity statement',
        '09' => 'Carries ‘UKCA’ logo',
    ];

    protected static array $tr = [
        '00' => 'Uyarı yok',
        '01' => 'CE logosu taşır',
        '02' => 'Minimum yaş uyarısı taşır',
        '03' => 'AB Oyuncak Güvenliği Yönergesi ‘0-3 yaş çocuklara uygun değildir’ uyarı logosu',
        '04' => 'AB Oyuncak Güvenliği Yönergesi Tehlike Uyarısı taşır',
        '05' => 'Oyuncak güvenliğiyle ilgili diğer yazı taşır',
        '06' => 'Malzeme Güvenlik Bilgi Formu mevcut',
        '07' => 'Uygunluk Beyanı mevcut',
        '08' => 'Carries EN71 conformity statement',
        '09' => 'Carries ‘UKCA’ logo',
    ];

}
