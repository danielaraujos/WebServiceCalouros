<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telephones Model
 *
 * @method \App\Model\Entity\Telephone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Telephone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Telephone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Telephone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telephone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Telephone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Telephone findOrCreate($search, callable $callback = null)
 */
class TelephonesTable extends Table
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

        $this->table('telephones');
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
            ->requirePresence('sector', 'create')
            ->notEmpty('sector');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        return $validator;
    }
}
