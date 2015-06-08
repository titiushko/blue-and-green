<?php
class Mesa extends AppModel {
	public $belongsTo = array(
		'Mesero' => array(
			'className' => 'Mesero',
			'foreignKey' => 'mesero_id'
		)
	);
	
	public $validate = array(
		'serie' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Serie ya existe.'
			)
		),
		'puestos' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Sólo números.'
			)
		),
		'posicion' => array(
			'rule' => 'notEmpty'
		),
		'mesero_id' => array(
			'rule' => 'notEmpty'
		)
	);
}