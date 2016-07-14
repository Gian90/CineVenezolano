<?php
App::uses('Referencia', 'Model');

/**
 * Referencia Test Case
 *
 */
class ReferenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.referencia',
		'app.pelicula',
		'app.peliculas_referencia',
		'app.crictica',
		'app.referencias_crictica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Referencia = ClassRegistry::init('Referencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Referencia);

		parent::tearDown();
	}

}
