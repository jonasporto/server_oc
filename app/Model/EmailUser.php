<?php
App::uses('AppModel', 'Model');

class EmailEstablishment extends AppModel {

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
		),
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'email_id',
			
		)
	);
}
