<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 57 — Unpriced item type
 *
 * @see https://ns.editeur.org/onix/en/57
 */
class CodeList57 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Free of charge',
        '02' => 'Price to be announced',
        '03' => 'Not sold separately',
        '04' => 'Contact supplier',
        '05' => 'Not sold as set',
        '06' => 'Revenue share',
        '07' => 'Calculated from contents',
        '08' => 'Supplier does not supply',
    ];

    protected static array $es = [
        '01' => 'Gratuito',
        '02' => 'Precio pendiente de comunicación',
        '03' => 'No se vende por separado',
        '04' => 'Ponerse en contacto con la editorial o el proveedor',
        '05' => 'No se vende como obra en varios volúmenes',
        '06' => 'Participación en los ingresos',
        '07' => 'Calculado a partir de los componentes',
        '08' => 'El proveedor no suministra',
    ];

    protected static array $de = [
        '01' => 'Free of charge',
        '02' => 'Price to be announced',
        '03' => 'Not sold separately',
        '04' => 'Contact supplier',
        '05' => 'Not sold as set',
        '06' => 'Revenue share',
        '07' => 'Calculated from contents',
        '08' => 'Supplier does not supply',
    ];

    protected static array $fr = [
        '01' => 'Gratuit',
        '02' => 'Prix en attente',
        '03' => 'Non vendu séparément',
        '04' => 'Contacter le distributeur',
        '05' => 'Non vendu comme un ensemble',
        '06' => 'Revenus partagés',
        '07' => 'Calculé en fonction du contenu',
        '08' => 'Le distributeur n’approvisionne pas',
    ];

    protected static array $it = [
        '01' => 'Gratuito',
        '02' => 'Prezzo non stabilito',
        '03' => 'Non venduto separatamente',
        '04' => 'Contattare il fornitore',
        '05' => 'Non venduto come insieme',
        '06' => 'Revenue share',
        '07' => 'Calcolato in base al contenuto',
        '08' => 'Il fornitore non tratta il prodotto',
    ];

    protected static array $nb = [
        '01' => 'Gratis',
        '02' => 'Pris ikke fastsatt',
        '03' => 'Ikke solgt separat',
        '04' => 'Kontakt forlag eller distributør',
        '05' => 'Selges ikke samlet',
        '06' => 'Inntektsdeling',
        '07' => 'Beregnet fra innholdet',
        '08' => 'Distributøren leverer ikke',
    ];

    protected static array $tr = [
        '01' => 'Ücretsiz',
        '02' => 'Fiyatı duyurulacak',
        '03' => 'Ayrı olarak satılmaz',
        '04' => 'Tedarikçiye başvurunuz',
        '05' => 'Takım olarak satılmaz',
        '06' => 'Revenue share',
        '07' => 'Calculated from contents',
        '08' => 'Supplier does not supply',
    ];

}
