<?php
session_start();

include 'conexion.php';

if (isset($_POST['save_doc'])) {

	$title=$_POST['titulo'];
	$id_curso=$_POST['nivel'];

	if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg' || $_FILES['imagen']['type']=='application/pdf' || $_FILES['imagen']['type']=='application/msword' || $_FILES['imagen']['type']=='application/vnd.ms-excel' || $_FILES['imagen']['type']=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $_FILES['imagen']['type']=='application/vnd.ms-powerpoint' || $_FILES['imagen']['type']=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){

		$ruta = "../material_alumno/".$_FILES["imagen"]["name"];
		$nombre=$_FILES["imagen"]["name"];
		$resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

      //move_uploaded_file($_FILES["imagen"]["tmp_name"][$i], $_FILES["imagen"]["name"][$i]);
        echo $ruta;
		if ($resultado){
			echo "guardo bien el archivo";
			$key = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
			$nombreImagen = $_FILES['imagen']['name'];
		
			$guarda_archivo=mysqli_query($conexion,"INSERT INTO 
					material(material_name,material_titulo,material_key,material_level) 
							VALUES ('$nombreImagen','$title','$key','$id_curso')") or die(mysqli_error($conexion));
		} else {
			echo "ocurrio un error al mover el archivo.";
		}       
	} else echo "tipo de archivo no permitido";
	
var_dump($guarda_archivo);
	if ($guarda_archivo) {
		//$_SESSION['message']="video_guardado";
		header('Location: ../index.php');
	}  else {
		//$_SESSION['message']="video_no_guardado";
		header('Location: ../index.php');
	}

}

if (isset($_POST['save_url'])) {

	$title=$_POST['titulo'];
	$id_curso=$_POST['nivel'];
	$url=$_POST['url'];

	$key = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
		
	$guarda_archivo=mysqli_query($conexion,"INSERT INTO 
					material(material_url,material_titulo,material_key,material_level, material_tipo) 
							VALUES ('$url','$title','$key','$id_curso', 2)") 
							or die(mysqli_error($conexion));
	
var_dump($guarda_archivo);
	if ($guarda_archivo) {
		//$_SESSION['message']="video_guardado";
		header('Location: ../index.php');
	}  else {
		//$_SESSION['message']="video_no_guardado";
		header('Location: ../index.php');
	}

}
