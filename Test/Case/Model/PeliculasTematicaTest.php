<?php
App::uses('PeliculasTematica', 'Model');

/**
 * PeliculasTematica Test Case
 *
 */
class PeliculasTematicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.peliculas_tematica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculasTematica = ClassRegistry::init('PeliculasTematica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculasTematica);

		parent::tearDown();
	}

}
