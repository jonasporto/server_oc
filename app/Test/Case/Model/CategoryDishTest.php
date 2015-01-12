<?php
App::uses('CategoryDish', 'Model');

/**
 * CategoryDish Test Case
 *
 */
class CategoryDishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_dish',
		'app.category',
		'app.category_establishment',
		'app.dish'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryDish = ClassRegistry::init('CategoryDish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryDish);

		parent::tearDown();
	}

}
