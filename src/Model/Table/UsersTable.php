<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
	public function isOwnedBy($userId, $clientId)
{
return $this->exists(['id' => $userId, 'client_id' => $clientId]);
}
	
	    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
 
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'client']],
                'message' => 'Please enter a valid role'
            ]);
    }

}
