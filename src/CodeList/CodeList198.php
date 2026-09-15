<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 198 — Product contact role
 *
 * @see https://ns.editeur.org/onix/en/198
 */
class CodeList198 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Metadata contact',
        '01' => 'Accessibility request contact',
        '02' => 'Promotional contact',
        '03' => 'Advertising contact',
        '04' => 'Review copy contact',
        '05' => 'Evaluation copy contact',
        '06' => 'Permissions contact',
        '07' => 'Return authorization contact',
        '08' => 'CIP / Legal deposit contact',
        '09' => 'Rights and licensing contact',
        '10' => 'Product safety contact',
        '11' => 'Product raw materials contact',
        '99' => 'Customer services contact',
    ];

    protected static array $es = [
        '00' => 'Contacto para metadatos',
        '01' => 'Contacto para solicitudes de accesibilidad',
        '02' => 'Contacto promocional',
        '03' => 'Contacto de publicidad',
        '04' => 'Contacto para ejemplares para revisión / crítica',
        '05' => 'Contacto para ejemplares de evaluación',
        '06' => 'Contacto para permisos',
        '07' => 'Contacto para autorizaciones de devoluciones',
        '08' => 'Contacto para depósito legal o catalogación en publicación (CIP)',
    ];

    protected static array $de = [
        '00' => 'Metadata contact',
        '01' => 'Accessibility request contact',
        '02' => 'Promotional contact',
        '03' => 'Advertising contact',
        '04' => 'Review copy contact',
        '05' => 'Evaluation copy contact',
        '06' => 'Permissions contact',
        '07' => 'Return authorisation contact',
        '08' => 'CIP / Legal deposit contact',
    ];

    protected static array $fr = [
        '00' => 'Contact pour les métadonnées',
        '01' => 'Contact pour les demandes sur l’accessibilité',
        '02' => 'Contact pour l’aspect promotionnel',
        '03' => 'Contact pour l’aspect publicitaire',
        '04' => 'Contact pour les services de presse',
        '05' => 'Contact pour les versions d’évaluation',
        '06' => 'Contact pour les autorisations',
        '07' => 'Contact pour les autorisations de retour',
        '08' => 'Contact pour le Catalogage avant publication (CIP) / le Dépôt légal',
    ];

    protected static array $it = [
        '00' => 'Referente per i metadati',
        '01' => 'Referente per richieste di accessibilità',
        '02' => 'Referente in ambito promozionale',
        '03' => 'Referente per la pubblicità',
        '04' => 'Referente per copie recensione',
        '05' => 'Referente per copie valutazione',
        '06' => 'Referente per le autorizzazioni',
        '07' => 'Referente per l’autorizzazione del reso',
        '08' => 'Referente per CIP (Cataloguing-in-Publication) e deposito legale',
    ];

    protected static array $nb = [
        '00' => 'Metadata contact',
        '01' => 'Accessibility request contact',
        '02' => 'Promotional contact',
        '03' => 'Advertising contact',
        '04' => 'Review copy contact',
        '05' => 'Evaluation copy contact',
        '06' => 'Permissions contact',
        '07' => 'Return authorisation contact',
        '08' => 'CIP / Legal deposit contact',
    ];

    protected static array $tr = [
        '00' => 'Meta veri iletişimi',
        '01' => 'Erişilebilirlik talep iletişimi',
        '02' => 'Promosyon iletişimi',
        '03' => 'Reklam iletişimi',
        '04' => 'İnceleme kopyası iletişimi',
        '05' => 'Değerlendirme kopyası iletişimi',
        '06' => 'İzin iletişimi',
        '07' => 'İade izin sözleşmesi',
        '08' => 'CIP / Legal deposit contact',
    ];

}
