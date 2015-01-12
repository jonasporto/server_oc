<?php
App::uses('ActionUser', 'Model');

/**
 * ActionUser Test Case
 *
 */
class ActionUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action_user',
		'app.user',
		'app.dish_rate',
		'app.establishment_rate',
		'app.follower',
		'app.pageview',
		'app.user_recomendation',
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
		'app.establishment_telephone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActionUser = ClassRegistry::init('ActionUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActionUser);

		parent::tearDown();
	}

}
