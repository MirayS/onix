<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 159 — Resource mode
 *
 * @see https://ns.editeur.org/onix/en/159
 */
class CodeList159 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Application',
        '02' => 'Audio',
        '03' => 'Image',
        '04' => 'Text',
        '05' => 'Video',
        '06' => 'Multi-mode',
    ];

    protected static array $es = [
        '01' => 'Aplicación',
        '02' => 'Audio',
        '03' => 'Imagen',
        '04' => 'Texto',
        '05' => 'Video',
        '06' => 'Multimodo',
    ];

    protected static array $de = [
        '01' => 'Application',
        '02' => 'Audio',
        '03' => 'Image',
        '04' => 'Text',
        '05' => 'Video',
        '06' => 'Multi-mode',
    ];

    protected static array $fr = [
        '01' => 'Application',
        '02' => 'Audio',
        '03' => 'Image',
        '04' => 'Texte',
        '05' => 'Vidéo',
        '06' => 'Multi-mode',
    ];

    protected static array $it = [
        '01' => 'Applicazione',
        '02' => 'Audio',
        '03' => 'Immagine',
        '04' => 'Testo',
        '05' => 'Video',
        '06' => 'Modalità mista',
    ];

    protected static array $nb = [
        '01' => 'Applikasjon',
        '02' => 'Lyd',
        '03' => 'Bilde',
        '04' => 'Tekst',
        '05' => 'Video',
        '06' => 'Multi-mode',
    ];

    protected static array $tr = [
        '01' => 'Uygulama',
        '02' => 'İşitsel',
        '03' => 'Resim',
        '04' => 'Metin',
        '05' => 'Video',
        '06' => 'Çoklu kip',
    ];

}
