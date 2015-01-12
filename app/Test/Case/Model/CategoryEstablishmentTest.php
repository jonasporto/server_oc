<?php
App::uses('CategoryEstablishment', 'Model');

/**
 * CategoryEstablishment Test Case
 *
 */
class CategoryEstablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_establishment',
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
		'app.address_establishment',
		'app.address',
		'app.address_coordinate',
		'app.coordinate',
		'app.dish_establishment',
		'app.email_establishment',
		'app.establishment_file',
		'app.establishment_pageview',
		'app.establishment_telephone',
		'app.category',
		'app.category_dish'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryEstablishment = ClassRegistry::init('CategoryEstablishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryEstablishment);

		parent::tearDown();
	}

}
