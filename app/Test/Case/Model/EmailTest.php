<?php
App::uses('Email', 'Model');

/**
 * Email Test Case
 *
 */
class EmailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.email',
		'app.email_establishment',
		'app.establishment',
		'app.action_establishment',
		'app.action',
		'app.action_dish',
		'app.dish',
		'app.dish_establishment',
		'app.dish_pageview',
		'app.pageview',
		'app.dish_rate',
		'app.user',
		'app.establishment_rate',
		'app.follower',
		'app.user_recomendation',
		'app.rate',
		'app.action_user',
		'app.address_establishment',
		'app.address',
		'app.address_coordinate',
		'app.coordinate',
		'app.coordinate_user',
		'app.category_establishment',
		'app.category',
		'app.category_dish',
		'app.establishment_file',
		'app.establishment_pageview',
		'app.establishment_telephone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Email = ClassRegistry::init('Email');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Email);

		parent::tearDown();
	}

}
