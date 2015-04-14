<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LeaguesTag Entity.
 */
class LeaguesTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'tag_id' => true,
        'league_id' => true,
        'tag' => true,
        'league' => true,
    ];
}
