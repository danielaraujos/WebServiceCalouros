<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoryManagements Model
 *
 * @property \Cake\ORM\Association\HasMany $Managements
 *
 * @method \App\Model\Entity\CategoryManagement get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoryManagement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoryManagement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoryManagement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoryManagement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoryManagement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoryManagement findOrCreate($search, callable $callback = null)
 */
class CategoryManagementsTable extends Table
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

        $this->table('category_managements');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Managements', [
            'foreignKey' => 'category_management_id'
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

        return $validator;
    }
}
