<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'taunt' => true,
        'email' => true,
        'password' => true,
        'last_login' => true,
        'teams' => true,
        'users' => true,
    ];
}
