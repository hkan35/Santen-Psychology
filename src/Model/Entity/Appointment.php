<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointment Entity.
 */
class Appointment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'datetime' => true,
        'note' => true,
        'price' => true,
        'client_id' => true,
        'appointmenttype_id' => true,
        'invoice_id' => true,
    ];
}
