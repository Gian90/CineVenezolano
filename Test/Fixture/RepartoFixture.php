<?php
/**
 * RepartoFixture
 *
 */
class RepartoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PERSONA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'REPARTO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'REP_PERSONAJE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'REP_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'REPARTO_ID', 'unique' => 1),
			'FK_PELICULA_REPARTO' => array('column' => 'PELICULA_ID', 'unique' => 0),
			'FK_PERSONA_REPARTO' => array('column' => 'PERSONA_ID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'PERSONA_ID' => 1,
			'PELICULA_ID' => 1,
			'REPARTO_ID' => 1,
			'REP_PERSONAJE' => 'Lorem ipsum dolor sit amet',
			'REP_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
