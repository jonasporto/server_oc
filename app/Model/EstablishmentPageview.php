<?php
App::uses('AppModel', 'Model');
/**
 * EstablishmentPageview Model
 *
 * @property Establishment $Establishment
 * @property Pageview $Pageview
 */
class EstablishmentPageview extends AppModel {

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
		'pageview_id' => array(
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
		'Pageview' => array(
			'className' => 'Pageview',
			'foreignKey' => 'pageview_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
