<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 161 — Resource form
 *
 * @see https://ns.editeur.org/onix/en/161
 */
class CodeList161 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Linkable resource',
        '02' => 'Downloadable file',
        '03' => 'Embeddable application',
    ];

    protected static array $es = [
        '01' => 'Recurso vinculable',
        '02' => 'Archivo descargable',
        '03' => 'Aplicación embebible',
    ];

    protected static array $de = [
        '01' => 'Linkable resource',
        '02' => 'Downloadable file',
        '03' => 'Embeddable application',
    ];

    protected static array $fr = [
        '01' => 'Ressource accessible par lien',
        '02' => 'Fichier téléchargeable',
        '03' => 'Application embarquée',
    ];

    protected static array $it = [
        '01' => 'Risorsa accessibile tramite collegamento ipertestuale',
        '02' => 'File scaricabile',
        '03' => 'Applicazione incorporabile',
    ];

    protected static array $nb = [
        '01' => 'Lenkbar ressurs',
        '02' => 'Nedlastbar fil',
        '03' => 'Applikasjon som kan inkluderes på nettsted',
    ];

    protected static array $tr = [
        '01' => 'Bağlantılandırılabilir kaynak',
        '02' => 'İndirilebilir dosya',
        '03' => 'Gömülü uygulama',
    ];

}
