<?php
App::uses('AppModel', 'Model');
/**
 * AddressCoordinate Model
 *
 * @property Address $Address
 * @property Coordinate $Coordinate
 */
class AddressCoordinate extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'address_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'coordinate_id' => array(
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
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Coordinate' => array(
			'className' => 'Coordinate',
			'foreignKey' => 'coordinate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
