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

	protected function _getTypeName()
    {
        return $this->_properties['description'];
    }


    protected $_accessible = [
        'description' => true,
        'appointments' => true,
    ];
}
