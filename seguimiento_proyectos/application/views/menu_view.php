<?php echo doctype('html5');?>
<!-- W.I.P. (Warning Idiot Programmer): Codigo Elvadorado por Titiushko -->
<html>
	<head>
		<title>Seguimiento de Proyectos</title>
		<?php echo link_tag('librerias/css/patron.css')?>
	</head>
	<body id="formato">
		<div id="cabeza">
			<?php echo heading('SEGUIMIENTO DE PROYECTOS', 1);?>
		</div>
		<div id="cuerpo">
			<?php echo heading('MENU', 2);?>
			<table>
				<tr>
					<td><?php echo anchor('Vista/Usuario/Consultar/', heading('Usuarios', 3), '');?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo anchor('Vista/Proyecto/Consultar/', heading('Proyectos', 3), '');?></td>
					<td><?php echo anchor('Vista/Proyecto/ProyectosXUsuarios/', heading('Proyectos por Usuario', 3), '');?></td>
				</tr>
				<tr>
					<td><?php echo anchor('Vista/Tarea/Consultar/', heading('Tareas', 3), '');?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo anchor('Vista/Responsable/Consultar/', heading('Responsables', 3), '');?></td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>