<?php
App::uses('AppModel', 'Model');
/**
 * Referencia Model
 *
 * @property Pelicula $Pelicula
 * @property Crictica $Crictica
 */
class Referencia extends AppModel {

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
	public $primaryKey = 'REFERENCIA_ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Pelicula' => array(
			'className' => 'Pelicula',
			'joinTable' => 'peliculas_referencias',
			'foreignKey' => 'referencia_id',
			'associationForeignKey' => 'pelicula_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Crictica' => array(
			'className' => 'Crictica',
			'joinTable' => 'referencias_cricticas',
			'foreignKey' => 'referencia_id',
			'associationForeignKey' => 'crictica_id',
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
