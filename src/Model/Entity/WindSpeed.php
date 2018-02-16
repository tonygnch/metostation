<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * WindSpeed Entity
 *
 * @property int $ID
 * @property \Cake\I18n\FrozenTime $DateAndTime
 * @property float $Value
 */
class WindSpeed extends Entity
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
     * Get last wind speed value
     * @return mixed
     */
    public function getLastWindValue()
    {
        $tableRegistry = new TableRegistry();
        $table = $tableRegistry->getWindSpeedTable();

        $lastWindQuery = $table->find()
                               ->select('Value')
                               ->where(['id >' => 1])
                               ->orderDesc('DateAndTime')
                               ->limit(1);
        $wind = $lastWindQuery->first();
        return $wind->Value;
    }
}
