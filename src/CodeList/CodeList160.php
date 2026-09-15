<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 160 — Resource feature type
 *
 * @see https://ns.editeur.org/onix/en/160
 */
class CodeList160 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Required credit',
        '02' => 'Caption',
        '03' => 'Copyright holder',
        '04' => 'Length in minutes',
        '05' => 'ISNI of resource contributor',
        '06' => 'Proprietary ID of resource contributor',
        '07' => 'Resource alternative text',
        '08' => 'Background color of image resource',
        '09' => 'Attribute of product image resource',
        '10' => 'Background color of page',
        '11' => 'ORCID of resource contributor',
    ];

    protected static array $es = [
        '01' => 'Créditos (autoría) requeridos',
        '02' => 'Pie / Título',
        '03' => 'Propietario del copyright',
        '04' => 'Duración en minutos',
        '05' => 'ISNI del autor mencionado en el recurso',
        '06' => 'Identificador propio de un autor del recurso',
        '07' => 'Texto alternativo para el recurso',
        '08' => 'Color del fondo de la imagen de recurso',
        '09' => 'Atributo de la imagen de recurso del producto',
        '10' => 'Color del fondo de la página web',
    ];

    protected static array $de = [
        '01' => 'Required credit',
        '02' => 'Caption',
        '03' => 'Copyright holder',
        '04' => 'Length in minutes',
        '05' => 'ISNI of resource contributor',
        '06' => 'Proprietary ID of resource contributor',
        '07' => 'Resource alternative text',
        '08' => 'Background color of image resource',
        '09' => 'Attribute of product image resource',
        '10' => 'Background color of page',
    ];

    protected static array $fr = [
        '01' => 'Crédit obligatoire',
        '02' => 'Légende',
        '03' => 'Détenteur du copyright',
        '04' => 'Durée en minutes',
        '05' => 'ISNI du contributeur de la ressource',
        '06' => 'ID propriétaire du contributeur de la ressource',
        '07' => 'Texte alternatif de la ressource',
        '08' => 'Couleur d’arrière-plan de l’image de la ressource',
        '09' => 'Attribut de la ressource image du produit',
        '10' => 'Couleur d’arrière-plan de la page',
    ];

    protected static array $it = [
        '01' => 'Riconoscimenti richiesti',
        '02' => 'Didascalia',
        '03' => 'Titolare dei diritti d’autore',
        '04' => 'Durata in minuti',
        '05' => 'ISNI del contributore della risorsa',
        '06' => 'Identificativo proprietario del contributore della risorsa',
        '07' => 'Testo alternativo per la risorsa',
        '08' => 'Colore di sfondo della risorsa immagine',
        '09' => 'Attributo della risorsa immagine del prodotto',
        '10' => 'Colore di sfondo della pagina',
    ];

    protected static array $nb = [
        '01' => 'Required credit',
        '02' => 'Caption',
        '03' => 'Copyright holder',
        '04' => 'Length in minutes',
        '05' => 'ISNI of resource contributor',
        '06' => 'Proprietary ID of resource contributor',
        '07' => 'Resource alternative text',
        '08' => 'Background color of image resource',
        '09' => 'Attribute of product image resource',
        '10' => 'Background color of page',
    ];

    protected static array $tr = [
        '01' => 'Kredi gerekli',
        '02' => 'Altyazı',
        '03' => 'Telif hakkı sahibi',
        '04' => 'Dakika olarak süre',
        '05' => 'Kaynak katkı sahibine ait ISNI',
        '06' => 'Kaynak katkı sahibine ait özel kimlik',
        '07' => 'Resource alternative text',
        '08' => 'Background color of image resource',
        '09' => 'Attribute of product image resource',
        '10' => 'Background color of page',
    ];

}
