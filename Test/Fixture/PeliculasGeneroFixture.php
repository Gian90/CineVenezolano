<?php
/**
 * PeliculasGeneroFixture
 *
 */
class PeliculasGeneroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'GENERO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PELICULA_GENERO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'PEL_GEN_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PELICULA_GENERO_ID', 'unique' => 1),
			'FK_GENEROS_PEL_GEN' => array('column' => 'GENERO_ID', 'unique' => 0),
			'FK_PELICULA_PEL_GEN' => array('column' => 'PELICULA_ID', 'unique' => 0)
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
			'GENERO_ID' => 1,
			'PELICULA_GENERO_ID' => 1,
			'PEL_GEN_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
