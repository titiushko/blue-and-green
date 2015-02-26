<?= doctype("html5"); ?>
<html lang="en">
	<head>
		<?php
		$meta_informaciones = array(
			array("name"	=>	"Content-type", "content"		=>	"text/html; charset=utf-8", "type" => "equiv")
		);
		echo meta($meta_informaciones);
		?>
		<title>ci_insertar_jquery</title>
		<?= link_tag("resources/css/estilo.css"); ?>
		<script type="text/javascript" src="<?= base_url(); ?>resources/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#agregar_noticia").click(function() {
					$("#mensaje").fadeIn(2000);
					$("#mensaje").css({
						"background-color":	"yellow",
						"width":			"300px"
					});
					titulo_noticia = $("#titulo_noticia").val();
					texto_noticia = $("#texto_noticia").val();
					if (titulo_noticia != "" && texto_noticia != "") {
						$.ajax({
							url:	"<?= base_url().'index.php/noticias/crear_noticia'; ?>",
							type:	'POST',
							data:	{
								titulo:	titulo_noticia,
								texto:	texto_noticia
							},
							success:	function(resultado) {
								$("#mensaje").html(resultado);
								$("#mensaje").fadeOut(5000);
							}
						});
					}
					else{
						$("#mensaje").html("No deje campos vac&iacute;os.");
						$("#mensaje").fadeOut(5000);
					}
				});
			});
		</script>
	</head>
	<body>
		<div id="cabecera">
			<?= heading('Insertar Datos a MySQL con CodeIgniter y AJAX jQuery'); ?>
			<?= anchor(base_url(), bold('Inicio')).' | '.anchor(base_url().'noticias', bold('Noticias')); ?>
		</div>
		<hr/>