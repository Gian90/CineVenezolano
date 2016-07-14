<?php 
$primer_nombre = $_POST["Primer_Nombre"];
$segundo_nombre = $_POST["Segundo_Nombre"];
$primer_apellido = $_POST["Primer_Apellido"];
$segundo_apellido = $_POST["Segundo_Apellido"];
$biografia = $_POST	["Biografia"];
$foto;
$bool_pri_nombre= false;


echo '<a> primer nombre  '.$primer_nombre.'</a>';
echo '<a>segundo nombre '.$segundo_nombre.'</a>';
echo '<a>primer apellido '.$primer_apellido.'</a>';
echo '<a>segundo apellido '.$segundo_apellido.'</a>';
echo '<a>biografia '.$biografia.'</a>';


if(!$primer_nombre)
{
	$primer_nombre=NULL;

}


if(!$segundo_nombre)
{
	$primer_nombre=NULL;

}

if(!$primer_apellido)
{
	$primer_nombre=NULL;

}

if(!$segundo_apellido)
{
	$primer_nombre=NULL;

}

if(!$biografia)
{
	$primer_nombre=NULL;

}



if ($_FILES["imagen_foto"]["error"] > 0){
	echo "ha ocurrido un error";

} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen_foto']['type'], $permitidos) && $_FILES['imagen_foto']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "imagenes/" . $_FILES['imagen_foto']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen_foto"]["tmp_name"], $ruta);
			if ($resultado){
				echo "el archivo ha sido movido exitosamente";
				$ruta="imagenes/" . $_FILES['imagen_foto']['name'];
			} else {
				echo "ocurrio un error al mover el archivo.";
				$ruta=NULL;
			}
		} else {
			echo $_FILES['imagen_foto']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

//conectar("insert into PERSONA('".$primer_nombre."','".$segundo_nombre."','".$primer_apellido."','".$segundo_apellido."','".$biografia."',NULL)")

?>
