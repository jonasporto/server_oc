<?php
App::uses('AppModel', 'Model');
/**
 * DishPageview Model
 *
 * @property Dish $Dish
 * @property Pageview $Pageview
 */
class DishPageview extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dish_id' => array(
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
		'Dish' => array(
			'className' => 'Dish',
			'foreignKey' => 'dish_id',
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
