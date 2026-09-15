<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 1 — Notification or update type
 *
 * @see https://ns.editeur.org/onix/en/1
 */
class CodeList1 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Early notification',
        '02' => 'Advance notification (confirmed)',
        '03' => 'Notification confirmed on publication',
        '04' => 'Update (partial)',
        '05' => 'Delete',
        '08' => 'Notice of sale',
        '09' => 'Notice of acquisition',
        '88' => 'Test update (partial)',
        '89' => 'Test record',
    ];

    protected static array $es = [
        '01' => 'Preanuncio (Notificación temprana)',
        '02' => 'Notificación anticipada (confirmada)',
        '03' => 'Notificación confirmada, en el momento de la publicación',
        '04' => 'Actualización (parcial)',
        '05' => 'Eliminación / Borrado',
        '08' => 'Notificación de venta',
        '09' => 'Notificación de compra',
        '88' => 'Actualización de prueba (parcial)',
        '89' => 'Registro de prueba',
    ];

    protected static array $de = [
        '01' => 'Early notification',
        '02' => 'Advance notification (confirmed)',
        '03' => 'Benachrichtigung bei Veröffentlichung bestätigt',
        '04' => 'Update (partial)',
        '05' => 'Delete',
        '08' => 'Notice of sale',
        '09' => 'Notice of acquisition',
        '88' => 'Test update (Partial)',
        '89' => 'Test record',
    ];

    protected static array $fr = [
        '01' => 'A paraître',
        '02' => 'A paraître (confirmé)',
        '03' => 'Annonce confirmée à la publication',
        '04' => 'Mise à jour (partielle)',
        '05' => 'Suppression',
        '08' => 'Notification de vente',
        '09' => 'Notification d’acquisition',
        '88' => 'Test de mise à jour (partiel)',
        '89' => 'Enregistrement test',
    ];

    protected static array $it = [
        '01' => 'Primo annuncio',
        '02' => 'Ulteriore annuncio (confermato)',
        '03' => 'Annuncio confermato (pubblicazione)',
        '04' => 'Aggiornamento (parziale)',
        '05' => 'Cancellazione',
        '08' => 'Comunicazione di vendita',
        '09' => 'Comunicazione di acquisizione',
        '88' => 'Test di un aggiornamento parziale',
        '89' => 'Record di test',
    ];

    protected static array $nb = [
        '01' => 'Tidlig melding om utgivelse',
        '02' => 'Forhåndsmelding om utgivelse (bekreftet)',
        '03' => 'Melding med bekreftet lagerstatus',
        '04' => 'Oppdatering (blocks)',
        '05' => 'Sletting',
        '08' => 'Melding om salg av produkt',
        '09' => 'Melding om kjøp av produkt',
        '88' => 'Testoppdatering (blocks)',
        '89' => 'Testpost',
    ];

    protected static array $tr = [
        '01' => 'Erken bildirim',
        '02' => 'Ön bildirim (doğrulanmış)',
        '03' => 'Yayınla doğrulanan bildirim',
        '04' => 'Güncelleme (kısmi)',
        '05' => 'Silme',
        '08' => 'Satış bildirimi',
        '09' => 'Devir bildirimi',
        '88' => 'Test güncellemesi (Kısmi)',
        '89' => 'Test kaydı',
    ];

}
