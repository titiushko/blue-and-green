<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Main</title>
	</head>
	<body>
	<table>
		<tr>
			<th>#</th><th>Nombre</th><th>Tipo</th><th>Ruta</th>
		</tr>
		<?php
		$i = 1;
		foreach($directorios as $valores){
			echo '<tr><td>'.$i++.'</td><td>'.utf8($valores['nombre']).'</td><td>'.$valores['tipo'].'</td><td>'.utf8($valores['ruta']).'</td></tr>';
		}
		?>
	</table>
	</body>
</html>