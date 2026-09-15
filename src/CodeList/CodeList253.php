<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 253 — Resource file feature type
 *
 * @see https://ns.editeur.org/onix/en/253
 */
class CodeList253 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'File format',
        '04' => 'Filename',
        '05' => 'Approximate download file size in megabytes',
        '06' => 'MD5 hash value',
        '07' => 'Exact download file size in bytes',
        '08' => 'SHA-256 hash value',
        '31' => 'Audio loudness',
    ];

    protected static array $es = [
        '01' => 'Formato del archivo',
        '04' => 'Nombre del archivo',
        '05' => 'Tamaño aproximado de descarga del archivo en megabytes',
        '06' => 'Valor del «hash MD5»',
        '07' => 'Tamaño exacto de descarga del archivo en bytes',
        '08' => 'Valor del «hash SHA-256»',
        '31' => 'Volumen de audio',
    ];

    protected static array $de = [
        '01' => 'File format',
        '04' => 'Filename',
        '05' => 'Approximate download file size in megabytes',
        '06' => 'MD5 hash value',
        '07' => 'Exact download file size in bytes',
        '08' => 'SHA-256 hash value',
        '31' => 'Audio loudness',
    ];

    protected static array $fr = [
        '01' => 'Format du fichier',
        '04' => 'Nom du fichier',
        '05' => 'Taille approximative du fichier téléchargé en mégaoctets',
        '06' => 'Valeur de hachage MD5',
        '07' => 'Taille exacte du téléchargement en octets',
        '08' => 'Valeur de hachage SHA-256',
        '31' => 'Volume audio',
    ];

    protected static array $it = [
        '01' => 'Formato del file',
        '04' => 'Nome del file',
        '05' => 'Dimensioni approssimative del file di download in megabyte',
        '06' => 'Valore di hash MD5',
        '07' => 'Dimensione esatta del file di download in byte',
        '08' => 'Valore di hash SHA-256',
        '31' => 'Volume dell’audio',
    ];

    protected static array $nb = [
        '01' => 'File format',
        '04' => 'Filename',
        '05' => 'Approximate download file size in megabytes',
        '06' => 'MD5 hash value',
        '07' => 'Exact download file size in bytes',
        '08' => 'SHA-256 hash value',
        '31' => 'Audio loudness',
    ];

    protected static array $tr = [
        '01' => 'File format',
        '04' => 'Filename',
        '05' => 'Approximate download file size in megabytes',
        '06' => 'MD5 hash value',
        '07' => 'Exact download file size in bytes',
        '08' => 'SHA-256 hash value',
        '31' => 'Audio loudness',
    ];

}
