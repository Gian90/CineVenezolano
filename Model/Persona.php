<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 */
class Persona extends AppModel {

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
	public $primaryKey = 'PERSONA_ID';


	public $hasMany = array(
		'FichasTecnica' => array(
			'className' => 'FichasTecnica',
			'foreignKey' => 'ficha_tecnica_id'
		),
		'Reparto' => array(
			'className' => 'Reparto',
			'foreignKey' => 'reparto_id',
			'dependent'=> true
		)
	);
}
