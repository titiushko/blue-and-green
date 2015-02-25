<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/estilo.css" media="screen" />
	</head>
	<body>
		<div class="container_12">
			<h1>Formulario de login con varios perfiles de usuario</h1>
			<div class="grid_12" id="login">
				<div class="grid_8 push_2" id="formulario_login">
					<div class="grid_6 push_1" id="campos_login">
						<?=form_open('index.php/login/iniciar_sesion')?>
							<?=form_label('Nombre de usuario:')?>
							<?=form_input($nombre_usuario)?>
							<p><?=form_error('username')?></p>
							<?=form_label('Introduce tu contraseña:')?>
							<?=form_password($contrasena_usuario)?>
							<p><?=form_error('password')?></p>
							<?=form_hidden('sesion_usuario', $sesion_usuario)?>
							<?=form_submit($boton)?>
						<?=form_close()?>
						<?php if($this->session->flashdata('usuario_incorrecto')) { ?>
						<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>