<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clinic Entity.
 */
class Clinic extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'clinic_name' => true,
        'clinic_phone' => true,
        'clinic_email' => true,
        'clinic_address' => true,
        'clinic_postal_address' => true,
    ];
}
