<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Source Entity.
 */
class Source extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'url' => true,
        'user_addable' => true,
        'events' => true,
        'players' => true,
    ];
}
