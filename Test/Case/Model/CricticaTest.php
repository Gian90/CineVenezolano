<?php
App::uses('Crictica', 'Model');

/**
 * Crictica Test Case
 *
 */
class CricticaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.crictica',
		'app.referencia',
		'app.referencias_crictica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Crictica = ClassRegistry::init('Crictica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Crictica);

		parent::tearDown();
	}

}
