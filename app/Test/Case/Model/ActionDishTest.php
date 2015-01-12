<?php
App::uses('ActionDish', 'Model');

/**
 * ActionDish Test Case
 *
 */
class ActionDishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action_dish',
		'app.dish',
		'app.action',
		'app.action_establishment',
		'app.action_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActionDish = ClassRegistry::init('ActionDish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActionDish);

		parent::tearDown();
	}

}
