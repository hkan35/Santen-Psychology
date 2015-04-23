<?php
namespace App\Model\Table;

use App\Model\Entity\Appointment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appointments Model
 */
class AppointmentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('appointments');
        $this->displayField('firstName');
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
            ->add('datetime', 'valid', ['rule' => 'datetime'])
            ->requirePresence('datetime', 'create')
            ->notEmpty('datetime')
            ->allowEmpty('note')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->requirePresence('price', 'create')
            ->notEmpty('price')
            ->add('client', 'valid', ['rule' => 'numeric'])
            ->requirePresence('client', 'create')
            ->notEmpty('client')
            ->add('appointmentType', 'valid', ['rule' => 'numeric'])
            ->requirePresence('appointmentType', 'create')
            ->notEmpty('appointmentType')
            ->add('invoice', 'valid', ['rule' => 'numeric'])
            ->requirePresence('invoice', 'create')
            ->notEmpty('invoice');

        return $validator;
    }
}
