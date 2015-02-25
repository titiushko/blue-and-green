<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generación de reportes con codeIgniter</title>
</head>
<body>
<h2 style="text-align: center">Imprime tus localidades</h2>
<form method="post" action="<?=base_url()?>index.php/pdfs/generar" />
<table align="center">
    <tr>
        <td>
            <select name="provincia" id="provincia">
		    <option value="">Selecciona tu provincía</option>
		    <?php
		    foreach($provincias as $fila)
		    {
		    ?>
		    <option value=<?=$fila->id?>><?=$fila->provincia?></option>
		    <?php
			}
		    ?>
    		</select>
        </td>
    </tr>
    <tr>
	    <td align="center" colspan="7">
	    <hr />
	        <input type="submit" value="Crear PDF" title="Crear PDF" />
        </td>
    </tr>
</table>
</form>
</body>
</html>