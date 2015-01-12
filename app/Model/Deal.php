<?php
App::uses('AppModel', 'Model');

class Deal extends AppModel {

	public $belongsTo = array('File');

	public $hasAndBelongsToMany = array(
		'Establishment' => array(
			 'joinTable' => 'deal_establishments'		
		)
	);
	
}
