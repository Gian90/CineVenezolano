<?php
/**
 * FichasTecnicaFixture
 *
 */
class FichasTecnicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FICHA_TECNICA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'PERSONA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'CASA_PRODUCTORA_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'TIPO_CARGO_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FIC_TEC_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'FICHA_TECNICA_ID', 'unique' => 1),
			'FK_CASA_PRODUCT_FICHA_TECNI' => array('column' => 'CASA_PRODUCTORA_ID', 'unique' => 0),
			'FK_PELICULA_FICHATECNICA' => array('column' => 'PELICULA_ID', 'unique' => 0),
			'FK_PERSONA_FICHA_TECNICA' => array('column' => 'PERSONA_ID', 'unique' => 0),
			'FK_TIPO_CARGO_FICHA_TECNICA' => array('column' => 'TIPO_CARGO_ID', 'unique' => 0)
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
			'FICHA_TECNICA_ID' => 1,
			'PERSONA_ID' => 1,
			'CASA_PRODUCTORA_ID' => 1,
			'TIPO_CARGO_ID' => 1,
			'FIC_TEC_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
