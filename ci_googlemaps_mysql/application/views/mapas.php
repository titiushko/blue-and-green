<!-- Vista principal de pagina web usando Google maps -->
<!DOCTYPE HTML>
<html>
<head>
<?php 
if($marcasTotal == 0)
{
?>
<!-- no hubo marcas -->
<?php 
}
else
{
?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA0i-FlhSlmSIy42o419clwBSEqkJhzYopKSEbd84FMDkJnd-q8xSvD48xXdHojwQNjEs5egDYuipQNA" type="text/javascript"></script>
<script type="text/javascript"> 
//<![CDATA[
 
    function load()
    {
		if (GBrowserIsCompatible())
		{
	        var map = new GMap2(document.getElementById("map"));
	 
			map.addControl(new GMapTypeControl());
	        map.addControl(new GLargeMapControl());
	        map.addControl(new GScaleControl());
			// map.addControl(new GOverviewMapControl());
	        map.setCenter(new GLatLng(24.4359914, -102.00231), 5);
	 		// map.setMapType(G_HYBRID_TYPE);
	
			//EL ICONO
			var iconoMarca = new GIcon(G_DEFAULT_ICON); 	// Icono por default que se mostrara
			iconoMarca.image = "http://localhost/ejemplo/statics/imgs/azul.png"; 	// ruta del icono
			var tamanoIcono = new GSize(30,30);				// Tamaño del icono
			iconoMarca.iconSize = tamanoIcono;
			iconoMarca.shadow = "http://localhost/ejemplo/statics/imgs/azul-2.png";	// Sombra de icono 
			var tamanoSombra = new GSize(32,28);			// Tamaño de la sombra
			iconoMarca.shadowSize = tamanoSombra;
			iconoMarca.iconAnchor = new GPoint(11, 16);		
	
			
	
			function createMarker(point, nombre, direccion)
			{
				//Creamos el infowindow dinamico para todas las marcas
				var marker = new GMarker(point, iconoMarca);
					GEvent.addListener(marker, 'click', function(){ marker.openInfoWindowHtml("<span style='font-size: 8pt; font-family: verdana'>" + nombre + "</span><br>");
				});
				return marker
			}

			<?php 
			foreach($marcas as $mIndividual):
			?>
			var point = new GPoint (<?php echo $mIndividual['lngMarca']; ?>, <?php echo $mIndividual['latMarca']; ?>);
				var nombre = <?php echo "\"" . $mIndividual['nombreMarca'] . "\""; ?>;
				var direccion = <?php echo "\"" . $mIndividual['direccionMarca']. "\"";  ?>;
				var marker = createMarker (point, nombre, direccion);
				map.addOverlay(marker); 
			<?php 
			endforeach;
			?>
	}
}
    window.onload=load;
//]]>
</script> 
<?php 
}
?>
 </head>

<body>
<?php
$attributos = array('width' => '740px', 'height' => '680px'); 
if($marcasTotal == 0)
{
?>
Por el momento no se encontraron marcas en la base de datos. <?php echo anchor_popup('mapas/nuevaMarca', 'Nueva marca en el mapa',$attributos)?>
<?php 
}
else
{
?>
<div id="map" style="width: 750px; height: 650px;"></div>
<?php echo anchor_popup('mapas/nuevaMarca', 'Nueva marca en el mapa',$attributos)?>
<?php
   echo $this -> pagination -> create_links();
}
?>
</body>
</html>
