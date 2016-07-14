<?php
App::uses('AppModel', 'Model');
/**
 * Tematica Model
 *
 * @property Pelicula $Pelicula
 */
class Tematica extends AppModel {

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
	public $primaryKey = 'TEMATICA_ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Pelicula' => array(
			'className' => 'Pelicula',
			'joinTable' => 'peliculas_tematicas',
			'foreignKey' => 'tematica_id',
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
