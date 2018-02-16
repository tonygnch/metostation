<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * SolarRadiation Entity
 *
 * @property int $ID
 * @property \Cake\I18n\FrozenTime $DateAndTime
 * @property float $Value
 */
class SolarRadiation extends Entity
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
        'Value' => true
    ];

    /**
     * Get last solar radiation value
     * @return mixed
     */
    public function getLastSolarRadiationValue()
    {
        $tableRegistry = new TableRegistry();
        $table = $tableRegistry->getSolarRadiationTable();

        $lastSolarRadiationQuery = $table->find()
            ->select('Value')
            ->where(['id >' => 1])
            ->orderDesc('DateAndTime')
            ->limit(1);
        $solar = $lastSolarRadiationQuery->first();
        return $solar->Value;
    }
}
