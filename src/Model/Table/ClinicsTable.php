<?php
namespace App\Model\Table;

use App\Model\Entity\Clinic;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clinics Model
 */
class ClinicsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('clinics');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Referrers', [
            'foreignKey' => 'clinic_id'
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
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('clinic_name', 'create')
            ->notEmpty('clinic_name');
            
        $validator
            ->requirePresence('clinic_phone', 'create')
            ->notEmpty('clinic_phone');
            
        $validator
            ->requirePresence('clinic_email', 'create')
            ->notEmpty('clinic_email');
            
        $validator
            ->requirePresence('clinic_address', 'create')
            ->notEmpty('clinic_address');
            
        $validator
            ->requirePresence('clinic_postal_address', 'create')
            ->notEmpty('clinic_postal_address');

        return $validator;
    }
}
