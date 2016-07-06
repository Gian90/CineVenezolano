<?php
function conectar($q)
{

		$conexion = mysql_connect("localhost", "root","123");
		mysql_database("cic-cine",$conexion);
		$query = mysql_query($q,$conexion);
		mysql_query("COMMIT",$conexion);
		mysql_close($conexion);

		return $query;
		
}

function prueba_conexion()
{
	$link = mysql_connect("localhost", "root","123")
    or die('No se pudo conectar: ' . mysql_error());
	echo 'Connected successfully';
	mysql_select_db('cic-cine') or die('No se pudo seleccionar la base de datos');
}

?>
