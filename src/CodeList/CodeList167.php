<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 167 — Price condition type
 *
 * @see https://ns.editeur.org/onix/en/167
 */
class CodeList167 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'No conditions',
        '01' => 'Includes updates',
        '02' => 'Must also purchase updates',
        '03' => 'Updates available',
        '04' => 'Linked subsequent purchase price',
        '05' => 'Linked prior purchase price',
        '06' => 'Linked price',
        '07' => 'Auto-renewing',
        '08' => 'Combined price',
        '10' => 'Rental duration',
        '11' => 'Rental to purchase',
        '12' => 'Rental extension',
    ];

    protected static array $es = [
        '00' => 'Sin condiciones',
        '01' => 'Incluye actualizaciones',
        '02' => 'Debe comprar también las actualizaciones',
        '03' => 'Actualizaciones disponibles',
        '04' => 'Precio condicionado a una compra adicional',
        '05' => 'Dependiente de compra previa',
        '06' => 'Precio encadenado',
        '07' => 'Renovación automática',
        '08' => 'Precio combinado',
        '10' => 'Duración del alquiler',
        '11' => 'De alquiler a compra',
        '12' => 'Ampliación de alquiler',
    ];

    protected static array $de = [
        '00' => 'No conditions',
        '01' => 'Includes updates',
        '02' => 'Must also purchase updates',
        '03' => 'Updates available',
        '04' => 'Linked subsequent purchase price',
        '05' => 'Linked prior purchase price',
        '06' => 'Linked price',
        '07' => 'Auto-renewing',
        '08' => 'Combined price',
        '10' => 'Rental duration',
        '11' => 'Rental to purchase',
        '12' => 'Rental extension',
    ];

    protected static array $fr = [
        '00' => 'Aucune condition',
        '01' => 'Inclut les mises à jour',
        '02' => 'Doit aussi acheter les mises à jour',
        '03' => 'Mises à jour disponibles',
        '04' => 'Prix lié à un achat ultérieur',
        '05' => 'Prix lié à un achat',
        '06' => 'Prix lié',
        '07' => 'Renouvellement automatique',
        '08' => 'Prix combinés',
        '10' => 'Durée de location',
        '11' => 'Location avant achat',
        '12' => 'Prolongation de location',
    ];

    protected static array $it = [
        '00' => 'Senza condizioni',
        '01' => 'Include gli aggiornamenti',
        '02' => 'Con obbligo di acquisto di aggiornamenti',
        '03' => 'Disponibilità di aggiornamenti',
        '04' => 'Prezzo dell’acquisto successivo collegato',
        '05' => 'Prezzo collegato a un acquisto precedente',
        '06' => 'Prezzo collegato',
        '07' => 'Rinnovo automatico',
        '08' => 'Prezzo combinato',
        '10' => 'Durata del noleggio',
        '11' => 'Acquisto di prodotto noleggiato',
        '12' => 'Estensione del noleggio',
    ];

    protected static array $nb = [
        '00' => 'Ingen betingelser',
        '01' => 'Inkluderer oppdateringer',
        '02' => 'Man må også kjøpe oppdateringer',
        '03' => 'Oppdateringer er tilgjengelig',
        '04' => 'Lenket pris – påfølgende kjøp',
        '05' => 'Lenket pris – tidligere kjøp',
        '06' => 'Lenket pris',
        '07' => 'Automatisk fornyelse',
        '08' => 'Kombinert pris',
        '10' => 'Utleieperiode',
        '11' => 'Utleie til kjøp',
        '12' => 'Forlengelse av utleie',
    ];

    protected static array $tr = [
        '00' => 'Koşulsuz',
        '01' => 'Güncellemeler dahil',
        '02' => 'Güncellemeler ayrıca satın alınmalı',
        '03' => 'Güncellemeler mevcut',
        '04' => 'Linked subsequent purchase price',
        '05' => 'Önceki alıma bağlı fiyat',
        '06' => 'Bağlantılı fiyat',
        '07' => 'Auto-renewing',
        '08' => 'Combined price',
        '10' => 'Kiralama süresi',
        '11' => 'Satın almaya yönelik kiralama',
        '12' => 'Kiralama uzatma',
    ];

}
