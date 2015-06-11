<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 * @property Permiso $Permiso
 * @property Usuario $Usuario
 */
class Role extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'codigo_rol';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_rol';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_rol' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Permiso' => array(
			'className' => 'Permiso',
			'joinTable' => 'roles_permisos',
			'foreignKey' => 'codigo_rol',
			'associationForeignKey' => 'codigo_permiso',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'joinTable' => 'usuarios_roles',
			'foreignKey' => 'codigo_rol',
			'associationForeignKey' => 'codigo_usuario',
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
