<?php
App::uses('Establishment', 'Model');

/**
 * Establishment Test Case
 *
 */
class EstablishmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.establishment',
		'app.action_establishment',
		'app.address_establishment',
		'app.category_establishment',
		'app.dish_establishment',
		'app.email_establishment',
		'app.establishment_file',
		'app.establishment_pageview',
		'app.establishment_rate',
		'app.establishment_telephone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Establishment = ClassRegistry::init('Establishment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Establishment);

		parent::tearDown();
	}

}
