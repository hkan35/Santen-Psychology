<?php
namespace App\Model\Table;

use App\Model\Entity\Appointmenttype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appointmenttypes Model
 */
class AppointmenttypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('appointmenttypes');
        $this->displayField('description');
        $this->primaryKey('id');
        $this->hasMany('Appointments', [
            'foreignKey' => 'appointmenttype_id'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');
            
        $validator
            /*->add('full_cost', 'valid', ['rule' => 'numeric'])*/
            ->requirePresence('full_cost', 'create')
            ->notEmpty('full_cost');
            
        $validator
            ->allowEmpty('medicare_rebatable');
            
        $validator
            /*->add('rebate_amount', 'valid', ['rule' => 'numeric'])*/
            ->requirePresence('rebate_amount', 'create')
            ->notEmpty('rebate_amount');

        return $validator;
    }
}
