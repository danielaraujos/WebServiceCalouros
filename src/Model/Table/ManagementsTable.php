<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Managements Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CategoryManagements
 *
 * @method \App\Model\Entity\Management get($primaryKey, $options = [])
 * @method \App\Model\Entity\Management newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Management[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Management|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Management patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Management[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Management findOrCreate($search, callable $callback = null)
 */
class ManagementsTable extends Table
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

        $this->table('managements');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('CategoryManagements', [
            'foreignKey' => 'category_management_id',
            'joinType' => 'INNER'
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
            ->requirePresence('function', 'create')
            ->notEmpty('function');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('room', 'create')
            ->notEmpty('room');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['category_management_id'], 'CategoryManagements'));
        return $rules;
    }
}
