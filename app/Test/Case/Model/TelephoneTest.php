<?php
App::uses('Telephone', 'Model');

/**
 * Telephone Test Case
 *
 */
class TelephoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.telephone',
		'app.establishment_telephone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Telephone = ClassRegistry::init('Telephone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Telephone);

		parent::tearDown();
	}

}
