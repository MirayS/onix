<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 66 — BISAC returnable indicator
 *
 * @see https://ns.editeur.org/onix/en/66
 */
class CodeList66 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'N' => 'No, not returnable',
        'Y' => 'Yes, returnable, full copies only',
        'S' => 'Yes, returnable, stripped cover',
        'C' => 'Conditional',
    ];

    protected static array $es = [
        'N' => 'Devolución no autorizada',
        'Y' => 'Devolución autorizada, sólo ejemplares completos',
        'S' => 'Devolución autorizada, cubierta rota',
        'C' => 'Devolución condicionada',
    ];

    protected static array $de = [
        'N' => 'No, not returnable',
        'Y' => 'Yes, returnable, full copies only',
        'S' => 'Yes, returnable, stripped cover',
        'C' => 'Conditional',
    ];

    protected static array $fr = [
        'N' => 'Non, retour non accepté',
        'Y' => 'Oui, retour accepté, exemplaire complet uniquement',
        'S' => 'Oui, retour accepté, couverture arrachée',
        'C' => 'Sous condition',
    ];

    protected static array $it = [
        'N' => 'Reso non autorizzato',
        'Y' => 'Reso autorizzato, solo copie integre',
        'S' => 'Reso autorizzato, copertina strappata',
        'C' => 'Reso condizionato',
    ];

    protected static array $nb = [
        'N' => 'No, not returnable',
        'Y' => 'Yes, returnable, full copies only',
        'S' => 'Yes, returnable, stripped cover',
        'C' => 'Conditional',
    ];

    protected static array $tr = [
        'N' => 'Hayır, iade edilmez',
        'Y' => 'Evet, iade edilebilir, sadece tam nüshalar',
        'S' => 'Evet, iade edilebilir, kabı çıkarılmış ürün',
        'C' => 'Şartlı',
    ];

}
