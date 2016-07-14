<?php
/**
 * LugareFixture
 *
 */
class LugareFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'LUGAR_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'_TABLE__PK' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'LUG_TIPO' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LUG_NOMBRE' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LUG_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'LUGAR_ID', 'unique' => 1),
			'FK_LUGARES_LUGARES' => array('column' => '_TABLE__PK', 'unique' => 0)
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
			'_TABLE__PK' => 1,
			'LUG_TIPO' => 'Lorem ipsum dolor sit amet',
			'LUG_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'LUG_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
