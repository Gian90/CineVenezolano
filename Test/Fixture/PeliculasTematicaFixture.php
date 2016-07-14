<?php
/**
 * PeliculasTematicaFixture
 *
 */
class PeliculasTematicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'TEMATICA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PELICULA_TEMATICA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'PEL_TEM_ID' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PELICULA_TEMATICA_ID', 'unique' => 1),
			'FK_PELICULA_PEL_TEM' => array('column' => 'PELICULA_ID', 'unique' => 0),
			'FK_TEMATICA_PEL_GEN' => array('column' => 'TEMATICA_ID', 'unique' => 0)
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
			'PELICULA_ID' => 1,
			'TEMATICA_ID' => 1,
			'PELICULA_TEMATICA_ID' => 1,
			'PEL_TEM_ID' => 'Lorem ipsum dolor sit amet'
		),
	);

}
