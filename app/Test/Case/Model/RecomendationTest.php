<?php
App::uses('Recomendation', 'Model');

/**
 * Recomendation Test Case
 *
 */
class RecomendationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recomendation',
		'app.user_recomendation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recomendation = ClassRegistry::init('Recomendation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recomendation);

		parent::tearDown();
	}

}
