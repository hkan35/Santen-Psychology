<?php
namespace App\Model\Table;

use App\Model\Entity\Client;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 */
class ClientsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {

        $this->table('clients');

	

        $this->displayField('full_name');
        $this->primaryKey('id');
        $this->hasMany('Appointments', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Reports', [
            'foreignKey' => 'client_id'
        ]);
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
            ->allowEmpty('id', 'create')
            ->add('date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date', 'create')
            ->notEmpty('date')
            ->requirePresence('lastName', 'create')
            ->notEmpty('lastName')
            ->requirePresence('firstName', 'create')
            ->notEmpty('firstName')
            ->allowEmpty('phone')
            ->allowEmpty('mobile')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->allowEmpty('address')
            ->allowEmpty('city')
            ->allowEmpty('postalAddress')
            ->allowEmpty('postalCity')
            ->requirePresence('privateHealthCare', 'create')
            ->notEmpty('privateHealthCare')
            ->allowEmpty('healthCareProvider')
            ->allowEmpty('intakeFormLocation')
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
 //   public function buildRules(RulesChecker $rules)
 //   {
  //      $rules->add($rules->isUnique(['email']));
  //      return $rules;
  //  }
}
