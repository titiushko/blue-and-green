<?php
/**
 * TareaFixture
 *
 */
class TareaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'codigo_tarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false, 'key' => 'primary'),
		'nombre_tarea' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'descripcion_tarea' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'codigo_proyecto' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'codigo_tarea', 'unique' => 1)
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
			'codigo_tarea' => 1,
			'nombre_tarea' => 'Lorem ipsum dolor sit amet',
			'descripcion_tarea' => 'Lorem ipsum dolor sit amet',
			'codigo_proyecto' => 1
		),
	);

}
