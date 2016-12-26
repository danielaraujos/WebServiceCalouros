<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CategoryTyps
 *
 * @method \App\Model\Entity\Typ get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typ newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typ[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typ|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typ patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typ[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typ findOrCreate($search, callable $callback = null)
 */
class TypsTable extends Table
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

        $this->table('typs');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('CategoryTyps', [
            'foreignKey' => 'category_typ_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->requirePresence('name_link', 'create')
            ->allowEmpty('name_link');

        $validator
            ->requirePresence('link', 'create')
            ->allowEmpty('link');

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
        $rules->add($rules->existsIn(['category_typ_id'], 'CategoryTyps'));

        return $rules;
    }
}
