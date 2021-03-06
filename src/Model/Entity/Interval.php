<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Interval Entity.
 */
class Interval extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'events' => true,
    ];
}
