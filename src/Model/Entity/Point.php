<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Point Entity.
 */
class Point extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'player_id' => true,
        'value' => true,
        'when' => true,
        'player' => true,
    ];
}
