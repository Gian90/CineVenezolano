<?php
App::uses('AppModel', 'Model');
/**
 * Reparto Model
 *
 */
class Reparto extends AppModel {

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
	public $primaryKey = 'REPARTO_ID';


	public $belongsTo = array(
		'Persona'=> array(
			'className'   => 'Persona',
			'foreignKey' => 'Persona_id'
		),
		'Pelicula'=> array(
			'className'   => 'Pelicula',
			'foreignKey' => 'Pelicula_id'
		)
	);
}
