<?php
/**
 * GuioneFixture
 *
 */
class GuioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TIPO_CARGO_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'GUI_TIPO' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'GUI_OBRA' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'GUI_AUTOR_OBRA' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TIP_CAR_NOMBRE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'TIP_CAR_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TIPO_CARGO_ID', 'unique' => 1)
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
			'TIPO_CARGO_ID' => 1,
			'GUI_TIPO' => 'Lorem ipsum dolor sit amet',
			'GUI_OBRA' => 'Lorem ipsum dolor sit amet',
			'GUI_AUTOR_OBRA' => 'Lorem ipsum dolor sit amet',
			'TIP_CAR_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'TIP_CAR_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
