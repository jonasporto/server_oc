<?php
App::uses('ActionEstablishment', 'Model');

/**
 * ActionEstablishment Test Case
 *
 */
class ActionEstablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action_establishment',
		'app.establishment',
		'app.address_establishment',
		'app.category_establishment',
		'app.dish_establishment',
		'app.email_establishment',
		'app.establishment_file',
		'app.establishment_pageview',
		'app.establishment_rate',
		'app.establishment_telephone',
		'app.action',
		'app.action_dish',
		'app.dish',
		'app.action_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActionEstablishment = ClassRegistry::init('ActionEstablishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActionEstablishment);

		parent::tearDown();
	}

}
