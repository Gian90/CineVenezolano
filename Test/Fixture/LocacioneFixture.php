<?php
/**
 * LocacioneFixture
 *
 */
class LocacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'LUGAR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LOCACION_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'LOG_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'LOCACION_ID', 'unique' => 1),
			'FK_LUGARES_LOCACIONES' => array('column' => 'LUGAR_ID', 'unique' => 0),
			'FK_PELICULAS_LOCACIONES' => array('column' => 'PELICULA_ID', 'unique' => 0)
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
			'LUGAR_ID' => 1,
			'PELICULA_ID' => 1,
			'LOCACION_ID' => 1,
			'LOG_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
