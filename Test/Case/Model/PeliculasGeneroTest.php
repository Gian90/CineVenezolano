<?php
App::uses('PeliculasGenero', 'Model');

/**
 * PeliculasGenero Test Case
 *
 */
class PeliculasGeneroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.peliculas_genero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculasGenero = ClassRegistry::init('PeliculasGenero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculasGenero);

		parent::tearDown();
	}

}
