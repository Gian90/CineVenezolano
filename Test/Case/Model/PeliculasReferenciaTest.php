<?php
App::uses('PeliculasReferencia', 'Model');

/**
 * PeliculasReferencia Test Case
 *
 */
class PeliculasReferenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.peliculas_referencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculasReferencia = ClassRegistry::init('PeliculasReferencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculasReferencia);

		parent::tearDown();
	}

}
