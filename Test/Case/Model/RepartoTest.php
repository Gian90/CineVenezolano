<?php
App::uses('Reparto', 'Model');

/**
 * Reparto Test Case
 *
 */
class RepartoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reparto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reparto = ClassRegistry::init('Reparto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reparto);

		parent::tearDown();
	}

}
