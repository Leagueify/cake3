<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity.
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'source_id' => true,
        'interval_id' => true,
        'last_update' => true,
        'last_error' => true,
        'source' => true,
        'interval' => true,
        'leagues' => true,
    ];
}
