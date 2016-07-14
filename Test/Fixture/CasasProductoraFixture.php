<?php
/**
 * CasasProductoraFixture
 *
 */
class CasasProductoraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CASA_PRODUCTORA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'CAS_PRO_NOMBRE' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CAS_PRO_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CASA_PRODUCTORA_ID', 'unique' => 1)
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
			'CASA_PRODUCTORA_ID' => 1,
			'CAS_PRO_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'CAS_PRO_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
