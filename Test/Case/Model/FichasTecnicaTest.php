<?php
App::uses('FichasTecnica', 'Model');

/**
 * FichasTecnica Test Case
 *
 */
class FichasTecnicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fichas_tecnica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FichasTecnica = ClassRegistry::init('FichasTecnica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FichasTecnica);

		parent::tearDown();
	}

}
