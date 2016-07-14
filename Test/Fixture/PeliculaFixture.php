<?php
/**
 * PeliculaFixture
 *
 */
class PeliculaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PELICULA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'TRAILER_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'PEL_TITULO' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PEL_ANO' => array('type' => 'date', 'null' => false, 'default' => null),
		'PEL_SINOPSIS' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PEL_RECAUDO_ESTRENO' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'PEL_RECAUDO_ACUMULADO' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'PEL_ESPECTADORESESTRENO' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'PEL_ESPECTADORES_ACUMULADO' => array('type' => 'date', 'null' => true, 'default' => null),
		'PEL_RUTA_IMA_CAPTURA' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PEL_RUTA_IMA_POSTER' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PEL_RUTA_PELICULA' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PEL_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PELICULA_ID', 'unique' => 1),
			'FK_PELICULA_TREILER' => array('column' => 'TRAILER_ID', 'unique' => 0)
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
			'TRAILER_ID' => 1,
			'PEL_TITULO' => 'Lorem ipsum dolor sit amet',
			'PEL_ANO' => '2016-07-07',
			'PEL_SINOPSIS' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PEL_RECAUDO_ESTRENO' => '',
			'PEL_RECAUDO_ACUMULADO' => '',
			'PEL_ESPECTADORESESTRENO' => '',
			'PEL_ESPECTADORES_ACUMULADO' => '2016-07-07',
			'PEL_RUTA_IMA_CAPTURA' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PEL_RUTA_IMA_POSTER' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PEL_RUTA_PELICULA' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PEL_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
