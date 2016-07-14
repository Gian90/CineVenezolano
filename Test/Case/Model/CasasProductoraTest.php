<?php
App::uses('CasasProductora', 'Model');

/**
 * CasasProductora Test Case
 *
 */
class CasasProductoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.casas_productora'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CasasProductora = ClassRegistry::init('CasasProductora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CasasProductora);

		parent::tearDown();
	}

}
