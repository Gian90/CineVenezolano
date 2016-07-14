<?php
App::uses('AppModel', 'Model');
/**
 * Genero Model
 *
 * @property Pelicula $Pelicula
 */
class Genero extends AppModel {

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
	public $primaryKey = 'GENERO_ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Pelicula' => array(
			'className' => 'Pelicula',
			'joinTable' => 'peliculas_generos',
			'foreignKey' => 'genero_id',
			'associationForeignKey' => 'pelicula_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
