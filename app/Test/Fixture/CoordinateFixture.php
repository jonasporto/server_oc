<?php
/**
 * CoordinateFixture
 *
 */
class CoordinateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'lat' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,6'),
		'lng' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,6'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'lat' => 1,
			'lng' => 1
		),
	);

}
