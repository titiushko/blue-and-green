
<?php
$formulario = array(
	'name'		=>	'usuarios',
	'id'		=>	'usuarios'
);

$codigo_usuario = array(
	'name'		=>	'codigo_usuario',
	'id'		=>	'codigo_usuario',
	'maxlength'	=>	'30',
	'size'		=>	'10',
	'value'		=>	set_value('codigo_usuario', @$usuario[0]->codigo_usuario) 
);

$nombres_usuario = array(
	'name'		=>	'nombres_usuario',
	'id'		=>	'nombres_usuario',
	'maxlength'	=>	'150',
	'size'		=>	'20',
	'value'		=>	set_value('nombres_usuario', @$usuario[0]->nombres_usuario)
);

$apellidos_usuario = array(
	'name'		=>	'apellidos_usuario',
	'id'		=>	'apellidos_usuario',
	'maxlength'	=>	'150',
	'size'		=>	'20',
	'value'		=>	set_value('apellidos_usuario', @$usuario[0]->apellidos_usuario)
);

$nacimiento_usuario = array(
	'name'		=>	'nacimiento_usuario',
	'id'		=>	'nacimiento_usuario',
	'maxlength'	=>	'150',
	'size'		=>	'20',
	'readonly'	=>	'readonly',
	'value'		=>	set_value('nacimiento_usuario', @$usuario[0]->nacimiento_usuario)
);

$password_usuario = array(
	'name'		=>	'password_usuario',
	'id'		=>	'password_usuario',
	'maxlength'	=>	'32',
	'size'		=>	'10',
	'value'		=>	set_value('password_usuario', @$usuario[0]->password_usuario)
);

$campos_ocultos = array('estado' => '0');
$btn_guardar = 'class="btn btn-primary" onclick="usuarios.estado.value=\'1\';"';
$btn_cancelar = 'class="btn btn-danger" onclick="location.href=\''.base_url().'usuarios/\';"';
?>
<html>
	<head>
		<title>Seguimiento de Proyectos</title>
		<?php echo link_tag('librerias/plugins/bootstrap/css/bootstrap.min.css'); ?>
		<?php echo link_tag('librerias/css/patron.css'); ?>
	</head>
	<body id="formato">
		<div id="cabeza">
			<?php echo heading('SEGUIMIENTO DE PROYECTOS', 1); ?>
		</div>
		<div id="cuerpo">
			<?php echo heading($operacion, 2); ?>
			<?php echo form_open('', $formulario, $campos_ocultos); ?>
			<table border="0" class="cuadricula table">
				<tr><th align="right"><?php echo form_label('Usuario:'); ?></th><td><?php echo form_input($codigo_usuario); ?><?php echo form_error('codigo_usuario'); ?></td></tr>
				<tr><th align="right"><?php echo form_label('Nombres:'); ?></th><td><?php echo form_input($nombres_usuario); ?><?php echo form_error('nombres_usuario'); ?></td></tr>
				<tr><th align="right"><?php echo form_label('Apellidos:'); ?></th><td><?php echo form_input($apellidos_usuario); ?><?php echo form_error('apellidos_usuario'); ?></td></tr>
				<tr><th align="right"><?php echo form_label('Fecha de Nacimiento:'); ?></th><td><?php echo form_input($nacimiento_usuario); ?><?php echo form_error('nacimiento_usuario'); ?></td></tr>
				<tr><th align="right"><?php echo form_label('Password:'); ?></th><td><?php echo form_password($password_usuario); ?><?php echo form_error('password_usuario'); ?></td></tr>
				<tr><td align="center"><?php echo form_submit('btn_guardar',$opcion, $btn_guardar); ?></td><td align="center"><?php echo form_button('btn_cancelar','Cancelar', $btn_cancelar); ?></td></tr>
			</table>
			<?php echo form_close(); ?>
		</div>
	</body>
</html>