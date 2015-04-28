<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity.
 */
class Report extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'date_created' => true,
        'reportLocation' => true,
        'client_id' => true,
        'reportType_id' => true,
        'client' => true,
        'report_type' => true,
    ];
}
