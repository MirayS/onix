<?php

declare(strict_types=1);

namespace MirayS\Onix\CodeList;

/**
 * ONIX Code List 92 — Supplier identifier type
 *
 * @see https://ns.editeur.org/onix/en/92
 */
class CodeList92 extends CodeList implements CodeListInterface
{
    protected static array $en = [
        '01' => 'Proprietary name ID scheme',
        '02' => 'Proprietary',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'German ISBN Agency publisher identifier',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'VAT Identity Number',
        '41' => 'EORI',
        '45' => 'Chinese participant identifier',
    ];

    protected static array $es = [
        '01' => 'Propio / Privado',
        '02' => 'Propio / Privado',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'German ISBN Agency publisher identifier',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'Número de identificación fiscal (NIF) europeo («VAT Id number»)',
    ];

    protected static array $de = [
        '01' => 'Proprietary',
        '02' => 'Proprietary',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'German ISBN Agency publisher identifier',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'VAT Identity Number',
    ];

    protected static array $fr = [
        '01' => 'Propriétaire',
        '02' => 'Propriétaire',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'Identifiant éditeur de l’Agence ISBN allemande',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'Numéro d’identification TVA',
    ];

    protected static array $it = [
        '01' => 'Proprietario',
        '02' => 'Proprietario',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'Codice identificativo attribuito dall’Agenzia ISBN tedesca',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'Numero di partita IVA',
    ];

    protected static array $nb = [
        '01' => 'Proprietær',
        '02' => 'Proprietær',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'German ISBN Agency publisher identifier',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'VAT Identity Number',
    ];

    protected static array $tr = [
        '01' => 'Özel',
        '02' => 'Özel',
        '04' => 'Börsenverein Verkehrsnummer',
        '05' => 'Alman ISBN Kurumu yayımcı tanımlayıcı',
        '06' => 'GLN',
        '07' => 'SAN',
        '12' => 'Distributeurscode Boekenbank',
        '13' => 'Fondscode Boekenbank',
        '16' => 'ISNI',
        '23' => 'KDV Kimlik Numarası',
    ];

}
