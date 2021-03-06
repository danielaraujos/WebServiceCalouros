<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transports Model
 *
 * @method \App\Model\Entity\Transport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transport findOrCreate($search, callable $callback = null)
 */
class TransportsTable extends Table
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

        $this->table('transports');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                'path' => 'webroot{DS}img{DS}uploads{DS}{table}{DS}',
                'nameCallback' => function($data, $settings) {
                    return time() . '.' . pathinfo($data['name'], PATHINFO_EXTENSION);
                },
                'transformer' => function (\Cake\Datasource\RepositoryInterface $table, \Cake\Datasource\EntityInterface $entity, $data, $field, $settings) {
                    // get the extension from the file
                    // there could be better ways to do this, and it will fail
                    // if the file has no extension
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(350, 350);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();
                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->save($tmp);
                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
                    ];
                },
            ],
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
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->requirePresence('dir', 'create')
            ->notEmpty('dir');

        return $validator;
    }
}
