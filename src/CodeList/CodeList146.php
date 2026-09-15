<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 146 — Usage status
 *
 * @see https://ns.editeur.org/onix/en/146
 */
class CodeList146 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Permitted unlimited',
        '02' => 'Permitted subject to limit',
        '03' => 'Prohibited',
    ];

    protected static array $es = [
        '01' => 'Permitido sin límites',
        '02' => 'Permitido, con limitaciones',
        '03' => 'No permitido',
    ];

    protected static array $de = [
        '01' => 'Permitted unlimited',
        '02' => 'Permitted subject to limit',
        '03' => 'Prohibited',
    ];

    protected static array $fr = [
        '01' => 'Autorisation sans limite',
        '02' => 'Autorisation soumise à limite',
        '03' => 'Interdiction',
    ];

    protected static array $it = [
        '01' => 'Utilizzo illimitato',
        '02' => 'Utilizzo limitato',
        '03' => 'Utilizzo vietato',
    ];

    protected static array $nb = [
        '01' => 'Ubegrenset',
        '02' => 'Tillatt, med begrensninger',
        '03' => 'Forbudt',
    ];

    protected static array $tr = [
        '01' => 'Sınırsız izinli',
        '02' => 'Sınırlı izinli',
        '03' => 'İzinsiz',
    ];

}
