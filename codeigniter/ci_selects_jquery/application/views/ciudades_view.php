<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#departamento").change(function() {
					$("#departamento option:selected").each(function() {
						departamento = $('#departamento').val();
						$.post("<?= base_url(); ?>index.php/ciudades/llena_municipios", {
							departamento: departamento
						}, function(data) {
							$("#municipio").html(data);
						});
					});
				}).change();
			});
		</script>
		</head>
	<body bgcolor="lightgray">
		<table align="center" bgcolor="lightblue" cellspacing="4" cellpadding="4" border="4">
			<caption>
				<h1>
					Municipios por Departamentos
				</h1>
			</caption>
			<thead>
				<tr>
					<th>
						Departamentos
					</th>
					<th>
						Municipios
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td bgcolor="white">
						<select name="departamento" id="departamento">
						<?php foreach( $departamentos as $fila ) { ?>
							<option value="<?= $fila->codigo_departamento; ?>"><?= $fila->nombre_departamento; ?></option>
						<?php } ?>
						</select>
					</td>
					<td bgcolor="white">
						<select name="municipio" id="municipio">
							<option value="">municipios</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>