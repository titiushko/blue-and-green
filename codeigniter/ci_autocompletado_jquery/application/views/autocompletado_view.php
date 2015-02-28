<?= doctype("html5"); ?>
<?php
$departamento = array (
	'name'			=> 'departamento',
	'id'			=> 'departamento',
	'maxlength'		=> '15',
	'size'			=> '15',
	'value'			=> '',
	'onpaste'		=> 'return false',
	'type'			=> 'text',
	'required'		=> 'required',
	'placeholder'	=> 'departamentos',
	'class'			=> 'form-control'
);
$municipio = 'id = "municipio" required = "required" class = "form-control"';
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
			<?= form_open(); ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading"><?= nbs(); ?></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<?= form_fieldset(heading('Buscar:', 2)); ?>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Departamento:'); ?>
											<?= form_input($departamento); ?>
											<?= div('', 'id="resultado_departamento"'); ?>
											<?= form_error('departamento'); ?>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<?= form_label('Municipio:'); ?>
											<?= form_dropdown('municipio', $lista_municipios, set_value('codigo_municipio', ''), $municipio); ?>
											<?= form_error('municipio'); ?>
										</div>
									</div>
									<?= form_fieldset_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?= form_close(); ?>
		</div>
	</body>
</html>