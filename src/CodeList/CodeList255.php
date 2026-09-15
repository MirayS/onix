<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 255 — Insert point type
 *
 * @see https://ns.editeur.org/onix/en/255
 */
class CodeList255 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        'ALP' => 'Adjacent to logical page',
        'APP' => 'Adjacent to physical page',
        'ATC' => 'At timecode',
        'AHL' => 'Adjacent to HTML label',
    ];

    protected static array $es = [
        'ALP' => 'Adyacente a una página lógica',
        'APP' => 'Adyacente a una página física',
        'ATC' => 'En la línea de tiempo',
        'AHL' => 'Adyacente a una etiqueta HTML',
    ];

    protected static array $de = [
        'ALP' => 'Adjacent to logical page',
        'APP' => 'Adjacent to physical page',
        'ATC' => 'At timecode',
        'AHL' => 'Adjacent to HTML label',
    ];

    protected static array $fr = [
        'ALP' => 'Adjacent à une page logique',
        'APP' => 'Adjacent à une page physique',
        'ATC' => 'Au timecode',
        'AHL' => 'Adjacent à une étiquette HTML',
    ];

    protected static array $it = [
        'ALP' => 'Adiacente alla pagina logica',
        'APP' => 'Adiacente alla pagina fisica',
        'ATC' => 'Al codice temporale',
        'AHL' => 'Adiacente all’etichetta HTML',
    ];

    protected static array $nb = [
        'ALP' => 'Adjacent to logical page',
        'APP' => 'Adjacent to physical page',
        'ATC' => 'At timecode',
        'AHL' => 'Adjacent to HTML label',
    ];

    protected static array $tr = [
        'ALP' => 'Adjacent to logical page',
        'APP' => 'Adjacent to physical page',
        'ATC' => 'At timecode',
        'AHL' => 'Adjacent to HTML label',
    ];

}
