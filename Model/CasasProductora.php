<?php
App::uses('AppModel', 'Model');
/**
 * CasasProductora Model
 *
 */
class CasasProductora extends AppModel {

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
	public $primaryKey = 'CASA_PRODUCTORA_ID';


	public $hasMany = array(
		'FichasTecnica' => array(
			'className' => 'FichasTecnica',
			'foreignKey' => 'ficha_tecnica_id'
		)
	);
}
