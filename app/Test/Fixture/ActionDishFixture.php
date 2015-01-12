<?php
/**
 * ActionDishFixture
 *
 */
class ActionDishFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dish_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'action_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'dish_id' => array('column' => array('dish_id', 'action_id'), 'unique' => 1)
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
			'dish_id' => 1,
			'action_id' => 1
		),
	);

}
