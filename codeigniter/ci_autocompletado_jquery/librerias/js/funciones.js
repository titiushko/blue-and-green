$(document).ready(function() {
	$("#departamento-1").keyup(function() {
		var v_nombre_departamento = $(this).val();
		$.post('index.php/autocompletado/autocompletar_departamento', {nombre_departamento: v_nombre_departamento}, function(data) {
			if(data != '') {
				$('#resultado-departamento').show();
				$("#resultado-departamento").html(data);
			}
		});
	});
	
	$("#resultado-departamento").find("p").live('click', function(e) {
		e.preventDefault();
		// $('#departamento-1').attr('value', $(this).html());
		$('#departamento-1').val($(this).text());
		$('#resultado-departamento').hide();
		var v_nombre_departamento = $('#departamento-1').val();
		$.post('index.php/autocompletado/lista_municipios', {nombre_departamento: v_nombre_departamento}, function(data) {
			if(data != '') {
				$("#municipio-1").html(data);
			}
		});
	});
	
	$("#municipio-2").keyup(function() {
		var v_nombre_municipio = $(this).val();
		var v_codigo_departamento = $('#departamento-2').val();
		$.post(
			'index.php/autocompletado/' + (v_nombre_municipio.length != 0 ? 'autocompletar_municipio' : 'listado_municipios'),
			{nombre_municipio: v_nombre_municipio, codigo_departamento: v_codigo_departamento},
			function(data) {
				if(data != '') {
					$('#resultado-municipio').show();
					$("#resultado-municipio").html(data);
				}
		});
	});
	
	$("#resultado-municipio").find("p").live('click', function(e) {
		e.preventDefault();
		$('#municipio-2').val($(this).text());
		$('#resultado-municipio').hide();
	});
	
	$("#departamento-2").change(function() {
		$("#departamento-2 option:selected").each(function() {
			var v_codigo_departamento = $('#departamento-2').val();
			$.post('index.php/autocompletado/listado_municipios', {codigo_departamento: v_codigo_departamento}, function(data) {
				if(data != '') {
					$('#resultado-municipio').show();
					$("#resultado-municipio").html(data);
				}
			});
		});
	}).change();
});
	/*
	$("#centro-educativo").keyup(function() {
		var respuesta = null;
		$.ajax({
			type:		"get",
			datatype:	"json",
			url:		"<?= base_url('ajax/lista_centros_educativos')?>",
			cache:		false,
			data:		{nombre_centro_educativo: $("#centro-educativo").val()},
			error:		function(data) {
							if(data != '') {
								$('#resultado-centro-educativo').show();
								$("#resultado-centro-educativo").html(data.responseText);
							}
			}
		});
	});
	*/
	/*
	$("#resultado-centro-educativo").find('p').on('click', function(e) {
		e.preventDefault();
		$('#centro-educativo').val($(this).text());
		$('#resultado-centro-educativo').hide();
	});
	*/