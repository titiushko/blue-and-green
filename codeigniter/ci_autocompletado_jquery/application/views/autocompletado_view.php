<?= doctype("html5"); ?>
<?php
$departamento_1 = array (
	'name'			=> 'departamento-1',
	'id'			=> 'departamento-1',
	'maxlength'		=> '15',
	'size'			=> '15',
	'value'			=> '',
	'onpaste'		=> 'return false',
	'type'			=> 'text',
	'required'		=> 'required',
	'placeholder'	=> 'buscar departamento',
	'class'			=> 'form-control'
);
$municipio_1 = 'id = "municipio-1" required = "required" class = "form-control"';
$departamento_2 = 'id = "departamento-2" required = "required" class = "form-control"';
$municipio_2 = array (
	'name'			=> 'municipio-2',
	'id'			=> 'municipio-2',
	'maxlength'		=> '15',
	'size'			=> '15',
	'value'			=> '',
	'onpaste'		=> 'return false',
	'type'			=> 'text',
	'required'		=> 'required',
	'placeholder'	=> 'buscar municipio',
	'class'			=> 'form-control'
);
?>
<html lang="en">
	<head>
		<?php
		$meta_informaciones = array(
			array("name" =>	"Content-type", "content" => "text/html; charset=utf-8", "type" => "equiv")
		);
		echo meta($meta_informaciones);
		?>
		<title>ci_autocompletado_jquery</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<?= link_tag('librerias/css/estilo.css'); ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>librerias/js/funciones.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?= heading($titulo, 1, 'class="well text-center"'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<?= heading('Versión 2', 2); ?>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<?= form_open(); ?>
									<?= form_fieldset(heading('Buscar:', 2)); ?>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Departamento:'); ?>
											<?= form_dropdown('departamento-2', $lista_departamentos, set_value('departamento-2', ''), $departamento_2); ?>
											<?= form_error('departamento-2'); ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Municipio:'); ?>
											<?= form_input($municipio_2); ?>
											<?= div('', 'id="resultado-municipio"'); ?>
											<?= form_error('municipio-2'); ?>
										</div>
									</div>
									<?= form_fieldset_close(); ?>
									<?= form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<?= heading('Versión 1', 2); ?>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<?= form_open(); ?>
									<?= form_fieldset(heading('Buscar:', 2)); ?>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Departamento:'); ?>
											<?= form_input($departamento_1); ?>
											<?= div('', 'id="resultado-departamento"'); ?>
											<?= form_error('departamento-1'); ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Municipio:'); ?>
											<?= form_dropdown('municipio-1', $lista_municipios, set_value('municipio-1', ''), $municipio_1); ?>
											<?= form_error('municipio-1'); ?>
										</div>
									</div>
									<?= form_fieldset_close(); ?>
									<?= form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>