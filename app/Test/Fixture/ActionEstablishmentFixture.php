<?php
/**
 * ActionEstablishmentFixture
 *
 */
class ActionEstablishmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'establishment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'action_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'establishment_id' => array('column' => array('establishment_id', 'action_id'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'establishment_id' => 1,
			'action_id' => 1
		),
	);

}
