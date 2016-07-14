<?php
App::uses('Guione', 'Model');

/**
 * Guione Test Case
 *
 */
class GuioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guione = ClassRegistry::init('Guione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guione);

		parent::tearDown();
	}

}
