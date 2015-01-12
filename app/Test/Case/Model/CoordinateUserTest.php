<?php
App::uses('CoordinateUser', 'Model');

/**
 * CoordinateUser Test Case
 *
 */
class CoordinateUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coordinate_user',
		'app.user',
		'app.dish_rate',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation',
		'app.coordinate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoordinateUser = ClassRegistry::init('CoordinateUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoordinateUser);

		parent::tearDown();
	}

}
