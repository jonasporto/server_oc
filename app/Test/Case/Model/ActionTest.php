<?php
App::uses('Action', 'Model');

/**
 * Action Test Case
 *
 */
class ActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action',
		'app.action_dish',
		'app.dish',
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
		'app.action_user',
		'app.user',
		'app.dish_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Action = ClassRegistry::init('Action');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Action);

		parent::tearDown();
	}

}
