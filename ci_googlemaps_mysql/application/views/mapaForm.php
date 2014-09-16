<!-- Vista principal de pagina web usando Google maps -->
<?php 
if($procede == 1)
{
?>
<script type="text/javascript">
<!--
alert('La marca se creo correctamente.');
window.opener.location.reload();
window.close();

//-->
</script>
<?php 
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA0i-FlhSlmSIy42o419clwBSEqkJhzYopKSEbd84FMDkJnd-q8xSvD48xXdHojwQNjEs5egDYuipQNA" type="text/javascript"></script>
<script type="text/javascript"> 
//<![CDATA[
 
    function load() {
		if (GBrowserIsCompatible())
		{
	        var map = new GMap2(document.getElementById("map"));
	 
			map.addControl(new GMapTypeControl());
	        map.addControl(new GLargeMapControl());
	        map.addControl(new GScaleControl());
			// map.addControl(new GOverviewMapControl());
	        map.setCenter(new GLatLng(24.4359914, -102.00231), 5);

			var point = new GPoint (24.4359914, -102.00231);
			var marker = new GMarker(point); 
			map.addOverlay(marker); 
			
			GEvent.addListener(map, "click", function (overlay,point){
				if (point){
					marker.setPoint(point);
					document.posicion.x.value=point.x
					document.posicion.y.value=point.y
				}
			});
	        
		}
    }
    window.onload=load
// ]]>
</script> 
</head>
<body>
<span style="color: #900;">*</span> Indica tu ubicacion.
<div id="map" style="width: 450px; height: 450px;"></div>
<?php 
if($error != '')
{
?>
<span style="color: #900"><?php echo $error; ?></span>
<?php 
}
?>
<div id="formulario" style="margin: 10px" > 
<form action="guardaMarca" id="posicion" name="posicion" enctype="multipart/form-data" method="post"> 
<input type="text" name="x" value="" style="border: none; color: #000;" /><input type="text" name="y" value="" style="border: none; color: #000;" /><br/>
<span style="color: #900;">*</span> Nombre: <input type="text" name="nombre"/><br>
Ubicaci&oacute;n: <input type="text" name="direccion"/><br>
<!-- Imagen: <input type="file" name="imagen" id="imagen"/ ><br> -->
<input type="submit" value="Enviar"/>


</form> 
</div> 
</body>
</html>