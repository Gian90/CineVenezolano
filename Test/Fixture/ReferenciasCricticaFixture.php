<?php
/**
 * ReferenciasCricticaFixture
 *
 */
class ReferenciasCricticaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CRICTICA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'REFERENCIA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'REFERENCIA_CRITICA_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'REF_CRI_MOSTRAR' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'REFERENCIA_CRITICA_ID', 'unique' => 1),
			'FK_CRICTICA_REFERE_CRITICA' => array('column' => 'CRICTICA_ID', 'unique' => 0),
			'FK_REFERECIA_REFEREN_CRITICA' => array('column' => 'REFERENCIA_ID', 'unique' => 0)
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
			'CRICTICA_ID' => 1,
			'REFERENCIA_ID' => 1,
			'REFERENCIA_CRITICA_ID' => 1,
			'REF_CRI_MOSTRAR' => 'Lorem ipsum dolor sit amet'
		),
	);

}
