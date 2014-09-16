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
		<div id="cuerpo" class="container">
			<?php echo heading('MANTENIMIENTO DE USUARIOS', 2); ?>
			<?php echo anchor('usuarios/agregar', 'Agregar', 'title=title="Agregar Nuevo Usuario"').br(2); ?>
			<?php if(empty($usuarios)){ ?>
			<b>No hay Usuarios.</b>
			<?php } else{ ?>
			<table border="1" class="cuadricula table table-bordered table-hover">
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Fecha de Nacimiento</th>
						<th colspan="2">Mantenimiento</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $usuario){ ?>
					<tr>
						<td><?php echo $usuario->codigo_usuario; ?></td>
						<td><?php echo $usuario->nombres_usuario; ?></td>
						<td><?php echo $usuario->apellidos_usuario; ?></td>
						<td><?php echo $usuario->nacimiento_usuario; ?></td>
						<td><?php echo anchor('usuarios/modificar/'.$usuario->codigo_usuario, '<span class="icon-pencil"></span> Editar', 'title="Editar a '.$usuario->codigo_usuario.'"'); ?></td>
						<td><?php echo anchor('usuarios/eliminar/'.$usuario->codigo_usuario, '<span class="icon-trash"></span> Eliminar', 'title="Eliminar a '.$usuario->codigo_usuario.'"'); ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } ?>
			<?php echo br().anchor('menu/', 'Volver', 'title="Volver a la Pagina de Inicio"'); ?>
		</div>
	</body>
</html>