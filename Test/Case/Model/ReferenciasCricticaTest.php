<?php
App::uses('ReferenciasCrictica', 'Model');

/**
 * ReferenciasCrictica Test Case
 *
 */
class ReferenciasCricticaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.referencias_crictica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReferenciasCrictica = ClassRegistry::init('ReferenciasCrictica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReferenciasCrictica);

		parent::tearDown();
	}

}
