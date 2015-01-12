<?php
App::uses('AddressCoordinate', 'Model');

/**
 * AddressCoordinate Test Case
 *
 */
class AddressCoordinateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.address_coordinate',
		'app.address',
		'app.address_establishment',
		'app.coordinate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AddressCoordinate = ClassRegistry::init('AddressCoordinate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AddressCoordinate);

		parent::tearDown();
	}

}
