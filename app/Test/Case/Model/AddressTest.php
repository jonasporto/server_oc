<?php
App::uses('Address', 'Model');

/**
 * Address Test Case
 *
 */
class AddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.address',
		'app.address_coordinate',
		'app.coordinate',
		'app.address_establishment',
		'app.establishment',
		'app.action_establishment',
		'app.action',
		'app.action_dish',
		'app.dish',
		'app.action_user',
		'app.user',
		'app.dish_rate',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation',
		'app.category_establishment',
		'app.dish_establishment',
		'app.email_establishment',
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
		$this->Address = ClassRegistry::init('Address');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Address);

		parent::tearDown();
	}

}
