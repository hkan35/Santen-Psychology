<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Referrer Entity.
 */
class Referrer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'doctorName' => true,
        'doctorProviderNo' => true,
        'notes' => true,
        'users_id' => true,
        'clinic_id' => true,
        'user' => true,
    ];
}
