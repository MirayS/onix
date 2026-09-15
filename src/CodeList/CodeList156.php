<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 156 — Cited content type
 *
 * @see https://ns.editeur.org/onix/en/156
 */
class CodeList156 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Review',
        '02' => 'Bestseller list',
        '03' => 'Media mention',
        '04' => '‘One locality, one book’ program',
        '05' => 'Curated list',
        '06' => 'Commentary / discussion',
        '07' => 'Interview',
        '08' => 'Soundtrack',
    ];

    protected static array $es = [
        '01' => 'Crítica',
        '02' => 'Lista de más vendidos («bestsellers»)',
        '03' => 'Mención en algún medio',
        '04' => 'Programa «One locality, one book» (Una localidad, un libro)',
        '05' => 'Lista seleccionada',
        '06' => 'Comentario / debate',
    ];

    protected static array $de = [
        '01' => 'Review',
        '02' => 'Bestseller list',
        '03' => 'Media mention',
        '04' => '‘One locality, one book’ program',
        '05' => 'Curated list',
        '06' => 'Commentary / discussion',
    ];

    protected static array $fr = [
        '01' => 'Critique',
        '02' => 'Liste des best-sellers',
        '03' => 'Mention par les médias',
        '04' => 'Programme « Une ville, un livre »',
        '05' => 'Bibliographie sélective',
        '06' => 'Commentaire/discussion',
    ];

    protected static array $it = [
        '01' => 'Recensione',
        '02' => 'Elenco bestseller',
        '03' => 'Menzione nei mezzi di comunicazione',
        '04' => 'Programma «One locality, one book»',
        '05' => 'Lista selezionata',
        '06' => 'Commento/discussione',
    ];

    protected static array $nb = [
        '01' => 'Anmeldelse',
        '02' => 'Bestselgerliste',
        '03' => 'Nevnt i media',
        '04' => '‘One locality, one book’ program',
        '05' => 'Redigert liste',
        '06' => 'Kommentar / diskusjon',
    ];

    protected static array $tr = [
        '01' => 'İnceleme',
        '02' => 'Çok satanlar listesi',
        '03' => 'Medyada yer alma',
        '04' => '‘Bir yer, bir kitap’ programı',
        '05' => 'Seçilmiş liste',
        '06' => 'Commentary / discussion',
    ];

}
