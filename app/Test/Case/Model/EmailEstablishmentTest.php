<?php
App::uses('EmailEstablishment', 'Model');

/**
 * EmailEstablishment Test Case
 *
 */
class EmailEstablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.establishment_telephone',
		'app.email'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmailEstablishment = ClassRegistry::init('EmailEstablishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailEstablishment);

		parent::tearDown();
	}

}
