<?php
App::uses('AppModel', 'Model');
/**
 * AddressEstablishment Model
 *
 * @property Establishment $Establishment
 * @property Address $Address
 */
class AddressEstablishment extends AppModel {

	public $belongsTo = array(
		'Establishment' => array(
			'className' => 'Establishment',
			),
		'Address' => array(
			'className' => 'Address',
			
		)
	);
}
