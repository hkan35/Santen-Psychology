<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity.
 */
class Payment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date' => true,
        'amountPaid' => true,
        'invoice_id' => true,
        'paymentType_id' => true,
        'invoice' => true,
        'paymenttype' => true,
    ];
}
