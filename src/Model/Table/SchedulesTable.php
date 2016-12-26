<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schedules Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shifts
 * @property \Cake\ORM\Association\HasMany $Transports
 *
 * @method \App\Model\Entity\Schedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\Schedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Schedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule findOrCreate($search, callable $callback = null)
 */
class SchedulesTable extends Table
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

        $this->table('schedules');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Shifts', [
            'foreignKey' => 'shifts_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Transports', [
            'foreignKey' => 'schedule_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('ida', 'create')
            ->notEmpty('ida');

        $validator
            ->requirePresence('intervalo', 'create')
            ->notEmpty('intervalo');

        $validator
            ->requirePresence('volta', 'create')
            ->notEmpty('volta');

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
        $rules->add($rules->existsIn(['shifts_id'], 'Shifts'));
        return $rules;
    }
}
