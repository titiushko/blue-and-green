$(document).ready(function() {
	$("#departamento").keyup(function() {
		var v_nombre_departamento = $(this).val();
		$.post('index.php/autocompletado/autocompletar_departamento', {nombre_departamento: v_nombre_departamento}, function(data) {
			if(data != '') {
				$('#resultado_departamento').show();
				$("#resultado_departamento").html(data);
			}
			else{
				$('#resultado_departamento').show();
				$("#resultado_departamento").html('');
			}
		})
	});
	
	$("#resultado_departamento").find("p").live('click', function(e) {
		e.preventDefault();
		// $('#departamento').attr('value', $(this).html());
		$('#departamento').val($(this).text());
		$('#resultado_departamento').hide();
		var v_nombre_departamento = $('#departamento').val();
		$.post('index.php/autocompletado/lista_municipios', {nombre_departamento: v_nombre_departamento}, function(data) {
			$("#municipio").html(data);
		});
	});
});