<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity.
 */
class Team extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'league_id' => true,
        'user_id' => true,
        'league' => true,
        'user' => true,
        'players' => true,
    ];
}
