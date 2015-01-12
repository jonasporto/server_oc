<?php
/**
 * RecomendationUserFixture
 *
 */
class RecomendationUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'recomendation_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'to_user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'visualized' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
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
			'user_id' => 1,
			'recomendation_id' => 1,
			'to_user_id' => 1,
			'visualized' => 1
		),
	);

}
