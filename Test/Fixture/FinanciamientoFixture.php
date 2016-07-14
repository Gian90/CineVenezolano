<?php
/**
 * FinanciamientoFixture
 *
 */
class FinanciamientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'INSTITUTO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FINANCIAMIENTO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'FIN_MONTO' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'FIN_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'FINANCIAMIENTO_ID', 'unique' => 1),
			'FK_INSTITUTO_FINACIAMIENTO' => array('column' => 'INSTITUTO_ID', 'unique' => 0),
			'FK_PELICULA_FINANCIAMIENTO' => array('column' => 'PELICULA_ID', 'unique' => 0)
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
			'INSTITUTO_ID' => 1,
			'FINANCIAMIENTO_ID' => 1,
			'FIN_MONTO' => '',
			'FIN_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
