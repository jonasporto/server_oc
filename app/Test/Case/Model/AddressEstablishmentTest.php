<?php
App::uses('AddressEstablishment', 'Model');

/**
 * AddressEstablishment Test Case
 *
 */
class AddressEstablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.establishment_telephone',
		'app.address',
		'app.address_coordinate',
		'app.coordinate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AddressEstablishment = ClassRegistry::init('AddressEstablishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AddressEstablishment);

		parent::tearDown();
	}

}
