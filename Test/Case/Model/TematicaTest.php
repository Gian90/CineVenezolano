<?php
App::uses('Tematica', 'Model');

/**
 * Tematica Test Case
 *
 */
class TematicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tematica',
		'app.pelicula',
		'app.peliculas_tematica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tematica = ClassRegistry::init('Tematica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tematica);

		parent::tearDown();
	}

}
