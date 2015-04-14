<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity.
 */
class Player extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'source_id' => true,
        'key' => true,
        'handicap' => true,
        'source' => true,
        'points' => true,
        'teams' => true,
    ];
}
