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
        'date' => true,
        'type' => true,
        'doctorName' => true,
        'doctorProviderNo' => true,
        'clinic' => true,
        'clinicPhone' => true,
        'clinicEmail' => true,
        'clinicAddress' => true,
        'clinicPostalAddress' => true,
        'notes' => true,
    ];
}
