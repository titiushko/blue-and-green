<?php echo doctype('html5'); ?>
<!-- W.I.P. (Warning Idiot Programmer): Codigo Elvadorado por Titiushko -->
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
			<?php echo heading('MENU', 2); ?>
			<table>
				<tr>
					<td><?php echo anchor('usuarios/', heading('Usuarios', 3), ''); ?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo anchor('proyectos/', heading('Proyectos', 3), ''); ?></td>
					<td><?php echo anchor('proyectos/', heading('Proyectos por Usuario', 3), ''); ?></td>
				</tr>
				<tr>
					<td><?php echo anchor('tareas/', heading('Tareas', 3), ''); ?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo anchor('responsables/', heading('Responsables', 3), ''); ?></td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>