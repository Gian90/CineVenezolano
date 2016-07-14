<?php
App::uses('AppModel', 'Model');
/**
 * Pelicula Model
 *
 * @property Genero $Genero
 * @property Referencia $Referencia
 * @property Tematica $Tematica
 */
class Pelicula extends AppModel {

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
	public $primaryKey = 'PELICULA_ID';

	/**
	 * imagen config
	 *
	 * @var string
	 */
	 public $actsAS = array(
		 'Upload.Upload'=> array(
			 'PEL_FOTO_PELICULA'=>array(
				 'fields'=> array(
					 'dir'=>'PEL_RUTA_PELICULA'
				 ),
				'thumbnailMethod'=> 'php',
				'thumbnailSizes'=> array(
					'vga'=> '640x480',
					'thumb' => '150x150'
				),
				'deleteOnUpdate' => true,
				'deleteFolderOnDelete' => true
			 )
		 )
	 );



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Genero' => array(
			'className' => 'Genero',
			'joinTable' => 'peliculas_generos',
			'foreignKey' => 'PELICULA_ID',
			'associationForeignKey' => 'genero_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Referencia' => array(
			'className' => 'Referencia',
			'joinTable' => 'peliculas_referencias',
			'foreignKey' => 'PELICULA_ID',
			'associationForeignKey' => 'referencia_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Tematica' => array(
			'className' => 'Tematica',
			'joinTable' => 'peliculas_tematicas',
			'foreignKey' => 'PELICULA_ID',
			'associationForeignKey' => 'tematica_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);


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
