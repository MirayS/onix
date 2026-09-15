<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 53 — Returns conditions code type
 *
 * @see https://ns.editeur.org/onix/en/53
 */
class CodeList53 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Proprietary returns coding scheme',
        '01' => 'French book trade returns conditions code',
        '02' => 'BISAC Returnable Indicator code',
        '03' => 'UK book trade returns conditions code',
        '04' => 'ONIX Returns conditions code',
    ];

    protected static array $es = [
        '00' => 'Propio / Privado',
        '01' => 'Código de condiciones de devolución de libros en Francia',
        '02' => 'Código de condiciones de devolución de libros en EE.UU.',
        '03' => 'Código de condiciones de devolución de libros en el Reino Unido',
        '04' => 'Código ONIX para condiciones de devoluciones',
    ];

    protected static array $de = [
        '00' => 'Proprietary',
        '01' => 'French book trade returns conditions code',
        '02' => 'BISAC Returnable Indicator code',
        '03' => 'UK book trade returns conditions code',
        '04' => 'ONIX Returns conditions code',
    ];

    protected static array $fr = [
        '00' => 'Propriétaire',
        '01' => 'Code des conditions de retour de l’industrie du livre en France',
        '02' => 'Code des conditions de retour BISAC',
        '03' => 'Code des conditions de retour de l’industrie du livre au Royaume-Uni',
        '04' => 'Code des conditions de retour ONIX',
    ];

    protected static array $it = [
        '00' => 'Proprietario',
        '01' => 'Codice delle condizioni di reso nel mercato francese',
        '02' => 'BISAC Returnable Indicator code',
        '03' => 'Codice delle condizioni di reso nel mercato del Regno Unito',
        '04' => 'Codice delle condizioni di reso ONIX',
    ];

    protected static array $nb = [
        '00' => 'Proprietær',
        '01' => 'French book trade returns conditions code',
        '02' => 'BISAC Returnable Indicator code',
        '03' => 'UK book trade returns conditions code',
        '04' => 'ONIX Returns conditions code',
    ];

    protected static array $tr = [
        '00' => 'Özel',
        '01' => 'Fransız kitap ticareti iade şartları kodu',
        '02' => 'BISAC İadedeli Ürün Gösterge kodu',
        '03' => 'BK kitap ticareti iade şartları kodu',
        '04' => 'ONIX iade şartları kodu',
    ];

}
