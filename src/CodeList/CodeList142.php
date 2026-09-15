<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 142 — Position on product
 *
 * @see https://ns.editeur.org/onix/en/142
 */
class CodeList142 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '00' => 'Unknown / unspecified',
        '01' => 'Cover 4',
        '02' => 'Cover 3',
        '03' => 'Cover 2',
        '04' => 'Cover 1',
        '05' => 'On spine',
        '06' => 'On box',
        '07' => 'On tag',
        '08' => 'On bottom',
        '09' => 'On back',
        '10' => 'On outer sleeve / back',
        '11' => 'On removable wrapping',
    ];

    protected static array $es = [
        '00' => 'Desconocido / No especificado',
        '01' => '4ª de cubierta',
        '02' => '3ª de cubierta',
        '03' => '2ª de cubierta',
        '04' => '1ª de cubierta',
        '05' => 'En el lomo',
        '06' => 'En la caja',
        '07' => 'En etiqueta',
        '08' => 'En la parte inferior',
        '09' => 'En la parte trasera',
        '10' => 'En sobrecubierta',
        '11' => 'En envoltorio desechable',
    ];

    protected static array $de = [
        '00' => 'Unknown / unspecified',
        '01' => 'Cover 4',
        '02' => 'Cover 3',
        '03' => 'Cover 2',
        '04' => 'Cover 1',
        '05' => 'On spine',
        '06' => 'On box',
        '07' => 'On tag',
        '08' => 'On bottom',
        '09' => 'On back',
        '10' => 'On outer sleeve / back',
        '11' => 'On removable wrapping',
    ];

    protected static array $fr = [
        '00' => 'Inconnu / non spécifié',
        '01' => '4e de couverture',
        '02' => '3e de couverture',
        '03' => '2e de couverture',
        '04' => '1re de couverture',
        '05' => 'Sur dos',
        '06' => 'Sur coffret',
        '07' => 'Sur étiquette',
        '08' => 'En bas',
        '09' => 'A l’arrière',
        '10' => 'Sur la pochette extérieure / à l’arrière',
        '11' => 'Sur emballage amovible',
    ];

    protected static array $it = [
        '00' => 'Non conosciuta/non specificata',
        '01' => 'Quarta di copertina',
        '02' => 'Terza di copertina',
        '03' => 'Seconda di copertina',
        '04' => 'Copertina frontale',
        '05' => 'Costa',
        '06' => 'Scatola',
        '07' => 'Etichetta',
        '08' => 'Fondo',
        '09' => 'Retro',
        '10' => 'Sovraccoperta/retro della confezione',
        '11' => 'Involucro rimovibile',
    ];

    protected static array $nb = [
        '00' => 'Unknown / unspecified',
        '01' => 'Cover 4',
        '02' => 'Cover 3',
        '03' => 'Cover 2',
        '04' => 'Cover 1',
        '05' => 'On spine',
        '06' => 'On box',
        '07' => 'On tag',
        '08' => 'On bottom',
        '09' => 'On back',
        '10' => 'On outer sleeve / back',
        '11' => 'On removable wrapping',
    ];

    protected static array $tr = [
        '00' => 'Bilinmiyor / belirtilmemiş',
        '01' => 'Kapak 4',
        '02' => 'Kapak 3',
        '03' => 'Kapak 2',
        '04' => 'Kapak 1',
        '05' => 'Sırt',
        '06' => 'Kutuda',
        '07' => 'Etikette',
        '08' => 'Dipte',
        '09' => 'Arkada',
        '10' => 'Şömiz/arkada',
        '11' => 'Çıkarılabilir ambalajda',
    ];

}
