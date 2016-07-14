<?php
/**
 * PeliculasReferenciaFixture
 *
 */
class PeliculasReferenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'REFERENCIA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PELICULA_REFERENCIA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'PEL_REF_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PELICULA_REFERENCIA_ID', 'unique' => 1),
			'FK_PELICULA_PELICULA_REFERENCIA' => array('column' => 'PELICULA_ID', 'unique' => 0),
			'FK_REFERENCIA_PELICULA_REFERENCIA' => array('column' => 'REFERENCIA_ID', 'unique' => 0)
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
			'REFERENCIA_ID' => 1,
			'PELICULA_REFERENCIA_ID' => 1,
			'PEL_REF_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
