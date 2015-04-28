<?php
namespace App\Model\Table;

use App\Model\Entity\Invoice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invoices Model
 */
class InvoicesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('invoices');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Appointments', [
            'foreignKey' => 'invoice_id'
        ]);
        $this->hasMany('Payments', [
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
            ->add('date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date', 'create')
            ->notEmpty('date')
            ->add('dueDate', 'valid', ['rule' => 'datetime'])
            ->requirePresence('dueDate', 'create')
            ->notEmpty('dueDate')
            ->add('amount', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount', 'create')
            ->notEmpty('amount')
            ->add('medicareRebate', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('medicareRebate');

        return $validator;
    }
}
