<?php
App::uses('AppModel', 'Model');
/**
 * EmailEstablishment Model
 *
 * @property Establishment $Establishment
 * @property Email $Email
 */
class EmailEstablishment extends AppModel {

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
		'email_id' => array(
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
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'email_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
