<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity.
 */
class Invoice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'dueDate' => true,
        'amount' => true,
        'medicareRebate' => true,
        'appointments' => true,
        'payments' => true,
    ];
}
