<?php
class Mesero extends AppModel {
	public $virtualFields = array('nombre_completo' => 'CONCAT(Mesero.nombres, " ", Mesero.apellidos)');
	
	public $validate = array(
		'dui' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'DUI ya existe.'
			)
		),
		'nombres' => array(
			'rule' => 'notEmpty'
		),
		'apellidos' => array(
			'rule' => 'notEmpty'
		),
		'telefono' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			)
		)
	);
	
	public $hasMany = array(
		'Mesa' => array(
			'className' => 'Mesa',
			'foreignKey' => 'mesero_id',
			'conditions' => '',
			'order' => 'Mesa.serie DESC',
			'depend' => false
		)
	);
}
