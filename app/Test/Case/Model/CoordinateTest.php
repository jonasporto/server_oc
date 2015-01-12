<?php
App::uses('Coordinate', 'Model');

/**
 * Coordinate Test Case
 *
 */
class CoordinateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coordinate',
		'app.coordinate_user',
		'app.user',
		'app.dish_rate',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coordinate = ClassRegistry::init('Coordinate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coordinate);

		parent::tearDown();
	}

}
