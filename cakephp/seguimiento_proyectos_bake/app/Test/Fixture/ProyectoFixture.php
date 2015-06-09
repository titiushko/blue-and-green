<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'codigo_proyecto' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false, 'key' => 'primary'),
		'nombre_proyecto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'descripcion_proyecto' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'inicio_proyecto' => array('type' => 'date', 'null' => true, 'default' => null),
		'fin_proyecto' => array('type' => 'date', 'null' => true, 'default' => null),
		'responsable_proyecto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'key' => 'index', 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'codigo_proyecto', 'unique' => 1),
			'proyectos_usuarios' => array('column' => 'responsable_proyecto', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'codigo_proyecto' => 1,
			'nombre_proyecto' => 'Lorem ipsum dolor sit amet',
			'descripcion_proyecto' => 'Lorem ipsum dolor sit amet',
			'inicio_proyecto' => '2015-06-09',
			'fin_proyecto' => '2015-06-09',
			'responsable_proyecto' => 'Lorem ipsum dolor sit amet'
		),
	);

}
