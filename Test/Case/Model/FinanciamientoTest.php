<?php
App::uses('Financiamiento', 'Model');

/**
 * Financiamiento Test Case
 *
 */
class FinanciamientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.financiamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Financiamiento = ClassRegistry::init('Financiamiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Financiamiento);

		parent::tearDown();
	}

}
