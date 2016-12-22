<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Buildings Model
 *
 * @method \App\Model\Entity\Building get($primaryKey, $options = [])
 * @method \App\Model\Entity\Building newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Building[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Building|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Building patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Building[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Building findOrCreate($search, callable $callback = null)
 */
class BuildingsTable extends Table
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

        $this->table('buildings');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('sub_name', 'create')
            ->notEmpty('sub_name');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->requirePresence('dir', 'create')
            ->notEmpty('dir');

        $validator
            ->requirePresence('credits', 'create')
            ->notEmpty('credits');

        return $validator;
    }
}
