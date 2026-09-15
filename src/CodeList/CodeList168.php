<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 168 — Price condition quantity type
 *
 * @see https://ns.editeur.org/onix/en/168
 */
class CodeList168 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Time period',
        '02' => 'Number of updates',
        '03' => 'Number of linked products',
        '04' => 'Number of copies of this product',
        '05' => 'Minimum number of linked products',
        '06' => 'Maximum number of copies of this product',
    ];

    protected static array $es = [
        '01' => 'Periodo de tiempo',
        '02' => 'Número de actualizaciones',
        '03' => 'Número de productos vinculados',
        '04' => 'Número de ejemplares de este producto',
        '05' => 'Número mínimo de productos vinculados',
        '06' => 'Número máximo de ejemplares de este producto',
    ];

    protected static array $de = [
        '01' => 'Time period',
        '02' => 'Number of updates',
        '03' => 'Number of linked products',
        '04' => 'Number of copies of this product',
        '05' => 'Minimum number of linked products',
        '06' => 'Maximum number of copies of this product',
    ];

    protected static array $fr = [
        '01' => 'Période',
        '02' => 'Nombre de mises à jour',
        '03' => 'Nombre de produits liés',
        '04' => 'Nombre d’exemplaires de ce produit',
        '05' => 'Minimum number of linked products',
        '06' => 'Maximum number of copies of this product',
    ];

    protected static array $it = [
        '01' => 'Periodo di tempo',
        '02' => 'Numero di aggiornamenti',
        '03' => 'Numero di prodotti collegati',
        '04' => 'Numero di copie di questo prodotto',
        '05' => 'Numero minimo di prodotti collegati',
        '06' => 'Numero massimo di copie di questo prodotto',
    ];

    protected static array $nb = [
        '01' => 'Time period',
        '02' => 'Number of updates',
        '03' => 'Number of linked products',
        '04' => 'Number of copies of this product',
        '05' => 'Minimum number of linked products',
        '06' => 'Maximum number of copies of this product',
    ];

    protected static array $tr = [
        '01' => 'Kiralama uzatma',
        '02' => 'Güncelleme sayısı',
        '03' => 'Bağlantılı ürünlerin sayısı',
        '04' => 'Number of copies of this product',
        '05' => 'Minimum number of linked products',
        '06' => 'Maximum number of copies of this product',
    ];

}
