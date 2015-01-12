<?php
App::uses('AppModel', 'Model');
/**
 * Rate Model
 *
 */
class Rate extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'grade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
/*
	public $hasMany = array(
		'Answer' => array('foreignKey' => 'parent_id',
			'className'=>'Rate')
	);*/
    public $hasAndBelongsToMany = array(
		'User' => array(
		  'joinTable' => 'rate_users',
		  ),
		'Establishment' => array(
		  'joinTable' => 'establishment_rates',
		  )
	);


	



	public function rateEstablishment($data){

 		$this->save($data);
 		$data['EstablishmentRate']['rate_id'] =  $this->id;
		return $this->EstablishmentRate->save($data);
	}

    function saveRateAndComment($data){

		$db = $this->getDataSource();
		$db->begin();

		try{

		if ($this->save($data)) {
			$data['RateUser']['rate_id'] = $data['EstablishmentRate']['rate_id'] = $this->id;
			$db_save = true;
		}
		
		if ($data['EstablishmentRate']['rate_id'] && !$this->EstablishmentRate->save($data)) {
			$db_save = false;
			throw new Exception("data invalid EstablishmentRate");
			
		}

		if ($data['RateUser']['user_id'] && !$this->RateUser->save($data)) {
			throw new Exception("data invalid RateUser");
			
			$db_save = false;
		}

		if ($db_save) {
			
			$db->commit();
			return true;
		}

		} catch (Exception $e){

			$this->log("\n\nModel -> Rate 
						\nMethod -> saveRateAndComment
						\n".print_r($data,true)." 
						\n".$e->getMessage() ."\n\n", "save_errors_or_exceptions");
		}

		$db->rollback();

		return false;
	}

}
