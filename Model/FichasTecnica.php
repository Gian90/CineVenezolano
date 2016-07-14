<?php
App::uses('AppModel', 'Model');
/**
 * FichasTecnica Model
 *
 */
class FichasTecnica extends AppModel {

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
	public $primaryKey = 'FICHA_TECNICA_ID';


	public $belongsTo = array(
		'Persona'=> array(
			 'className'   => 'Persona',
			 'foreignKey' => 'Persona_id'
		),
		'Guione'=> array(
			 'className'   => 'Guione',
			 'foreignKey' => 'tipo_cargo_id'
		),
		'CasasProductora'=> array(
			 'className'   => 'CasasProductora',
			 'foreignKey' => 'casa_productora_id'
		),
		'Pelicula'=> array(
			 'className'   => 'Pelicula',
			 'foreignKey' => 'Pelicula_id'
		)
	);

}
