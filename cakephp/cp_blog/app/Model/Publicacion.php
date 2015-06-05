<?php
class Publicacion extends AppModel {
	public $name = 'Publicacion';
	public $useTable = 'publicaciones';
	public $primaryKey = 'id_publicacion';
	public $validate = array(
		'titulo_publicacion' => array(
			'rule' => 'notEmpty'
		),
		'cuerpo_publicacion' => array(
			'rule' => 'notEmpty'
		)
	);
}
