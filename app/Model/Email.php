<?php
App::uses('AppModel', 'Model');
/**
 * Email Model
 *
 * @property EmailEstablishment $EmailEstablishment
 */
class Email extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'EmailEstablishment' => array(
			'className' => 'EmailEstablishment',
			'foreignKey' => 'email_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	/*public $hasAndBelongToMany = array(
		
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'user_id',
			'joinTable' => 'email_users',
       		'associationForeignKey' => 'email_id')
		);
*/
}
