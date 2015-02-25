<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--Llammamos a nuestra hoja de estilos con esta línea-->
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/estilos.css" />
		<title>Formulario de registro</title>
	</head>
	<body>
		<fieldset>
			<legend>Formulario de registro</legend>
			<?php echo form_open(base_url()."index.php/envio_email/nuevo_usuario") ?>
			<table>
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="nom" value="<?php echo set_value('nom') ?>" /></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="correo" value="<?php echo set_value('correo') ?>" /></td>
				</tr>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="nick" value="<?php echo set_value('nick') ?> "/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="grabar" value="si" /></td>
					<td><font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Registrarme" title="Registrarme" /></td>
				</tr>
			</table>
			<?php echo form_close() ?>
		</fieldset>
	</body>
</html>