<?php
App::uses('AppModel', 'Model');
/**
 * Comentario Model
 *
 * @property Articulo $Articulo
 * @property Pedido $Pedido
 * @property Persona $Persona
 * @property Preferencia $Preferencia
 * @property Tienda $Tienda
 */
class Comentario extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_comentario';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'comentario';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'codigo_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pedido' => array(
			'className' => 'Pedido',
			'foreignKey' => 'codigo_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'codigo_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Preferencia' => array(
			'className' => 'Preferencia',
			'foreignKey' => 'codigo_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tienda' => array(
			'className' => 'Tienda',
			'foreignKey' => 'codigo_comentario',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
