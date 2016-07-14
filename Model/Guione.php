<?php
App::uses('AppModel', 'Model');
/**
 * Guione Model
 *
 */
class Guione extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'basecake';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'TIPO_CARGO_ID';



	public $hasMany = array(
		'FichasTecnica' => array(
			'className' => 'FichasTecnica',
			'foreignKey' => 'ficha_tecnica_id'
		)
	);
}
