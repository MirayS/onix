<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 197 — Collection sequence type
 *
 * @see https://ns.editeur.org/onix/en/197
 */
class CodeList197 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary collection sequence type',
        '02' => 'Title order',
        '03' => 'Publication order',
        '04' => 'Temporal / narrative order',
        '05' => 'Original publication order',
        '06' => 'Suggested reading order',
        '07' => 'Suggested display order',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'Orden por títulos',
        '03' => 'Orden de publicación',
        '04' => 'Orden temporal o narrativo',
        '05' => 'Orden de publicación original',
        '06' => 'Orden de lectura sugerido',
        '07' => 'Orden sugerido para mostrar',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'Title order',
        '03' => 'Publication order',
        '04' => 'Temporal/narrative order',
        '05' => 'Original publication order',
        '06' => 'Suggested reading order',
        '07' => 'Suggested display order',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Ordre du titre',
        '03' => 'Ordre de publication',
        '04' => 'Ordre temporel / narratif',
        '05' => 'Ordre de publication original',
        '06' => 'Ordre suggéré pour la lecture',
        '07' => 'Ordre suggéré pour l’affichage',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Ordine dei titoli',
        '03' => 'Ordine di pubblicazione',
        '04' => 'Ordine temporale/narrativo',
        '05' => 'Ordine di pubblicazione originale',
        '06' => 'Ordine di lettura suggerito',
        '07' => 'Ordine di visualizzazione suggerito',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'Tittelrekkefølge',
        '03' => 'Utgivelsesrekkefølge',
        '04' => 'Handlingsrekkefølge',
        '05' => 'Original utgivelsesrekkefølge',
        '06' => 'Foreslått leserekkefølge',
        '07' => 'Foreslått rekkefølge for visning',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'Başlık düzeni',
        '03' => 'Yayınlanma sırası',
        '04' => 'Zamansal/betimleyici sıra',
        '05' => 'Orijinal yayın sırası',
        '06' => 'Önerilen okuma sırası',
        '07' => 'Suggested display order',
    ];

}
