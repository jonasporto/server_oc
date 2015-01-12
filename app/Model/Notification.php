<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property NotificationUser $NotificationUser
 */
class Notification extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'NotificationUser' => array(
			'className' => 'NotificationUser',
			'foreignKey' => 'notification_id',
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

}
