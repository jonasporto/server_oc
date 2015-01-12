<?php
App::uses('DishRate', 'Model');

/**
 * DishRate Test Case
 *
 */
class DishRateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dish_rate',
		'app.user',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation',
		'app.rate',
		'app.dish'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DishRate = ClassRegistry::init('DishRate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DishRate);

		parent::tearDown();
	}

}
