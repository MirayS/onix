<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 239 — Supply contact role
 *
 * @see https://ns.editeur.org/onix/en/239
 */
class CodeList239 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '07' => 'Return authorization contact',
        '10' => 'Product safety contact',
        '11' => 'Product raw materials contact',
        '99' => 'Customer services contact',
    ];

    protected static array $es = [
        '07' => 'Contacto para autorización de devoluciones',
        '99' => 'Atención al usuario',
    ];

    protected static array $de = [
        '07' => 'Return authorisation contact',
        '99' => 'Customer services contact',
    ];

    protected static array $fr = [
        '07' => 'Contact pour l’autorisation de retour',
        '99' => 'Service clients',
    ];

    protected static array $it = [
        '07' => 'Contatto per l’autorizzazione al reso',
        '99' => 'Contatto per l’assistenza al cliente',
    ];

    protected static array $nb = [
        '07' => 'Return authorisation contact',
        '99' => 'Customer services contact',
    ];

    protected static array $tr = [
        '07' => 'İade izin sözleşmesi',
        '99' => 'Müşteri hizmetleri',
    ];

}
