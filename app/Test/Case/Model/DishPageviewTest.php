<?php
App::uses('DishPageview', 'Model');

/**
 * DishPageview Test Case
 *
 */
class DishPageviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dish_pageview',
		'app.dish',
		'app.pageview'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DishPageview = ClassRegistry::init('DishPageview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DishPageview);

		parent::tearDown();
	}

}
