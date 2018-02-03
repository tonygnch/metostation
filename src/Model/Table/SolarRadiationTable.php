<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolarRadiation Model
 *
 * @method \App\Model\Entity\SolarRadiation get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolarRadiation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolarRadiation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolarRadiation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolarRadiation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolarRadiation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolarRadiation findOrCreate($search, callable $callback = null, $options = [])
 */
class SolarRadiationTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('solar_radiation');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->dateTime('DateAndTime')
            ->requirePresence('DateAndTime', 'create')
            ->notEmpty('DateAndTime');

        $validator
            ->numeric('Value')
            ->requirePresence('Value', 'create')
            ->notEmpty('Value');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['DateAndTime']));

        return $rules;
    }
}
