<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * League Entity.
 */
class League extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'logo' => true,
        'motto' => true,
        'started' => true,
        'event_id' => true,
        'public' => true,
        'event' => true,
        'teams' => true,
        'tags' => true,
    ];
}
