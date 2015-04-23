<?php
namespace App\Model\Table;

use App\Model\Entity\Referrer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Referrers Model
 */
class ReferrersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('referrers');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('type')
            ->requirePresence('doctorName', 'create')
            ->notEmpty('doctorName')
            ->requirePresence('doctorProviderNo', 'create')
            ->notEmpty('doctorProviderNo')
            ->requirePresence('clinic', 'create')
            ->notEmpty('clinic')
            ->requirePresence('clinicPhone', 'create')
            ->notEmpty('clinicPhone')
            ->allowEmpty('clinicEmail')
            ->requirePresence('clinicAddress', 'create')
            ->notEmpty('clinicAddress')
            ->allowEmpty('clinicPostalAddress')
            ->allowEmpty('notes');

        return $validator;
    }
}
