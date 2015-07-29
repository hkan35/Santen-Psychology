<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{
	public function isOwnedBy($userId)
{
return $this->exists(['id' => $userId]);
}
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('username');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
	
	function isValidAUSPhoneFormat($validator){
	
 $phone_no=$validator;
 $errors = array();
    if(empty($phone_no)) {
        $errors [] = "Please enter Phone Number";
    }
    else if (!preg_match('/^[0]{1}[0-9]{3}[0-9]{3}[0-9]{3}$/', $phone_no)) {
        $errors [] = "Please enter valid Phone Number, format 0XXXXXXXXX";
    } 

    if (!empty($errors))
    return implode("\n", $errors);

    return true;
}




    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username')
			->add('email', [
    'unique' => ['rule' => 'validateUnique', 'provider' => 'table','message'=>'username has already in use']
]);
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password')
			->add('password', [
        'length' => [
            'rule' => ['minLength', 8],
            'message' => 'password at least 8 characters',
        ]
    ]);
            
        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'client']],
                'message' => 'Please enter a valid role'
            ]);
            
        $validator
            ->requirePresence('lastName', 'create')
            ->notEmpty('lastName');
            
        $validator
            ->requirePresence('firstName', 'create')
            ->notEmpty('firstName');
            
        $validator
            ->allowEmpty('phone')
			 ->add('phone', 'Valid',['rule'=>[$this,'isValidAUSPhoneFormat']    
    ]);
            
        $validator
            ->notEmpty('mobile')
            ->add('mobile', 'Valid',['rule'=>[$this,'isValidAUSPhoneFormat']    
    ]);
		
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->notEmpty('email');
            
        $validator
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('city');
            
        $validator
            ->allowEmpty('postalAddress');
            
        $validator
            ->allowEmpty('postalCity');
            
        $validator
           ->allowEmpty('privateHealthCare');
            
        $validator
            ->allowEmpty('healthCareProvider');
            
        $validator
            ->allowEmpty('intakeFormLocation');
            
        $validator
            ->add('referrer', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('referrer');

        return $validator;
    }
	
	
	

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
		$rules->add($rules->isUnique(['mobile']));
        return $rules;
    }
}
