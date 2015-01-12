<?php
App::uses('AppModel', 'Model');
/**
 * EstablishmentTelephone Model
 *
 * @property Establishment $Establishment
 * @property Telephone $Telephone
 */
class EstablishmentTelephone extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'establishment_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telephone_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Establishment' => array(
			'className' => 'Establishment',
			'foreignKey' => 'establishment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Telephone' => array(
			'className' => 'Telephone',
			'foreignKey' => 'telephone_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
