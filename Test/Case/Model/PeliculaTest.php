<?php
App::uses('Pelicula', 'Model');

/**
 * Pelicula Test Case
 *
 */
class PeliculaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula',
		'app.genero',
		'app.peliculas_genero',
		'app.referencia',
		'app.peliculas_referencia',
		'app.crictica',
		'app.referencias_crictica',
		'app.tematica',
		'app.peliculas_tematica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pelicula = ClassRegistry::init('Pelicula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pelicula);

		parent::tearDown();
	}

}
