<?php
/**
 * InstitutoFixture
 *
 */
class InstitutoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'INSTITUTO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'INS_TIPO' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'INS_NOMBRE' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'INS_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'INSTITUTO_ID', 'unique' => 1)
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
			'INSTITUTO_ID' => 1,
			'INS_TIPO' => 'Lorem ipsum dolor sit amet',
			'INS_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'INS_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
