<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointmenttype Entity.
 */
class Appointmenttype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'description' => true,
        'full_cost' => true,
        'medicare_rebatable' => true,
        'rebate_amount' => true,
        'appointments' => true,
    ];
}
