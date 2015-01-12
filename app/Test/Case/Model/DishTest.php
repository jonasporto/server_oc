<?php
App::uses('Dish', 'Model');

/**
 * Dish Test Case
 *
 */
class DishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dish',
		'app.dish_establishment',
		'app.establishment',
		'app.action_establishment',
		'app.action',
		'app.action_dish',
		'app.action_user',
		'app.user',
		'app.dish_rate',
		'app.rate',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation',
		'app.address_establishment',
		'app.address',
		'app.address_coordinate',
		'app.coordinate',
		'app.coordinate_user',
		'app.category_establishment',
		'app.category',
		'app.category_dish',
		'app.email_establishment',
		'app.establishment_file',
		'app.establishment_pageview',
		'app.establishment_telephone',
		'app.dish_pageview'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dish = ClassRegistry::init('Dish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dish);

		parent::tearDown();
	}

}
