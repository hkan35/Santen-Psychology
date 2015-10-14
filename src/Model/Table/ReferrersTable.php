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
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clinics', [
            'foreignKey' => 'clinic_id',
            'joinType' => 'INNER'
        ]);
    }
	
function ValidateMedicareProviderNumber($validator)
{
    /*
     * The Medicare provider number comprises:
     *  - six digits (provider stem)
     *  -  a practice location character (one alphanum char)
     *  -  a check-digit (one alpha character)
     */
	/*$providerNumber=$validator;*/
    $locTable = '0123456789ABCDEFGHJKLMNPQRTUVWXY';
    $checkTable = 'YXWTLKJHFBA';
    $weights = array(3,5,8,4,2,1);
    $re = "/^(\d{5,6})([{$locTable}])([{$checkTable}])$/";
 
    $validator = preg_replace("/[^\dA-Z]/", 
                                   "",
                                   strtoupper($validator));
    if (preg_match($re, $validator, $matches)) {
        $stem = $matches[1];
 
        // accommodate dropping of leading 0 
        if (strlen($stem)==5) $stem="0".$stem;  
 
        $location = $matches[2];
        $checkDigit = $matches[3][0];
            
        // IMPORTANT - letters I, O, S and Z are not included 
        // Some documentation incorrectly removes the digit 1.
        $plv = strpos($locTable, $location);
        $sum = $plv * 6;
 
        foreach ($weights as $position=>$weight) {
            $sum += $stem[$position] * $weight;
        }
 
        if ($checkDigit == $checkTable[$sum % 11]) {
            return true;
        }
    }
    return false;
	
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
            ->allowEmpty('type');
            
        $validator
            ->requirePresence('doctorName', 'create')
            ->notEmpty('doctorName');
            
        $validator
            ->requirePresence('doctorProviderNo', 'create')
            ->notEmpty('doctorProviderNo')
			->add('doctorProviderNo','Valid',['rule'=>[$this,'ValidateMedicareProviderNumber']    
    ]);
            
        $validator
            ->allowEmpty('notes');

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
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['clinic_id'], 'Clinics'));
        return $rules;
    }
}
