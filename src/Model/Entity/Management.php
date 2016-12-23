<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Management Entity
 *
 * @property int $id
 * @property string $function
 * @property string $name
 * @property string $room
 * @property string $email
 * @property string $phone
 * @property int $category_management_id
 *
 * @property \App\Model\Entity\CategoryManagement $category_management
 */
class Management extends Entity
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
        '*' => true,
        'id' => false
    ];
}
