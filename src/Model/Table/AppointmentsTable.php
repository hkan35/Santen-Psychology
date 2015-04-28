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

// src/Model/Table/ArticlesTable.php
public function isOwnedBy($appointmentId, $clientId)
{
return $this->exists(['id' => $appointmentId, 'client_id' => $clientId]);
}

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('appointments');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
        $this->belongsTo('Appointmenttypes', [
            'foreignKey' => 'appointmenttype_id'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id'
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
            ->add('datetime', 'valid', ['rule' => 'datetime'])
            ->requirePresence('datetime', 'create')
            ->notEmpty('datetime')
            ->allowEmpty('note')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->requirePresence('price', 'create')
            ->notEmpty('price');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['appointmenttype_id'], 'Appointmenttypes'));
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));
        return $rules;
    }
}
