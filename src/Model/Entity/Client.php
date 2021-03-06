<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity.
 */
class Client extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
	protected function _getFullName()
    {
        return 'ID:'. $this->_properties['id'] . '   ' .
		$this->_properties['firstName'] . '  ' .
            $this->_properties['lastName'];
    }

	 
    protected $_accessible = [
        'date' => true,
        'lastName' => true,
        'firstName' => true,
        'phone' => true,
        'mobile' => true,
        'email' => true,
        'address' => true,
        'city' => true,
        'postalAddress' => true,
        'postalCity' => true,
        'privateHealthCare' => true,
        'healthCareProvider' => true,
        'intakeFormLocation' => true,
        'referrer' => true,
    ];
}
