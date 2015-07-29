<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    protected $_accessible = ['*' => true];

    // ...

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    /*protected $_accessible = [
        'username' => true,
        'password' => true,
        'role' => true,
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
	    /*protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }*/
}
