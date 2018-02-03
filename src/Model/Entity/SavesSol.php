<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SavesSol Entity
 *
 * @property int $ID
 * @property \Cake\I18n\FrozenTime $DateAndTime
 * @property float $kg_co2
 * @property float $kg_so2
 * @property float $kg_nox
 */
class SavesSol extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'DateAndTime' => true,
        'kg_co2' => true,
        'kg_so2' => true,
        'kg_nox' => true
    ];
}
