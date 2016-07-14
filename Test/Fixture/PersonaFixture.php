<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PERSONA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'PER_PRIMER_NOMBRE' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_SEGUNDO_NOMBRE' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_PRIMER_APELLIDO' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_SEGUNDO_APELLIDO' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_SEXO' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_FECHA_NAC' => array('type' => 'date', 'null' => true, 'default' => null),
		'PER_FECHA_FALLE' => array('type' => 'date', 'null' => true, 'default' => null),
		'PER_RUTA_FOTO' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_BIOGRAFIA' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PER_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PERSONA_ID', 'unique' => 1)
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
			'PERSONA_ID' => 1,
			'PER_PRIMER_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'PER_SEGUNDO_NOMBRE' => 'Lorem ipsum dolor sit amet',
			'PER_PRIMER_APELLIDO' => 'Lorem ipsum dolor sit amet',
			'PER_SEGUNDO_APELLIDO' => 'Lorem ipsum dolor sit amet',
			'PER_SEXO' => 'Lorem ipsum dolor sit ame',
			'PER_FECHA_NAC' => '2016-07-07',
			'PER_FECHA_FALLE' => '2016-07-07',
			'PER_RUTA_FOTO' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PER_BIOGRAFIA' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PER_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
