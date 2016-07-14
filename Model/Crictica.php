<?php
App::uses('AppModel', 'Model');
/**
 * Crictica Model
 *
 * @property Referencia $Referencia
 */
class Crictica extends AppModel {

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
	public $primaryKey = 'CRICTICA_ID';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Referencia' => array(
			'className' => 'Referencia',
			'joinTable' => 'referencias_cricticas',
			'foreignKey' => 'crictica_id',
			'associationForeignKey' => 'referencia_id',
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
