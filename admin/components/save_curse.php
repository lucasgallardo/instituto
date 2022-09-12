<?php
session_start();

include 'conexion.php';

if (isset($_POST['save_curse'])) {

	$title=$_POST['nombre'];
	$description=$_POST['descripcion'];


	$guarda_archivo=mysqli_query($conexion,"INSERT INTO 
					cursos(curso_nombre,curso_descripcion) 
							VALUES ('$title','$description')") or die(mysqli_error($conexion));
	
	
var_dump($guarda_archivo);
	if ($guarda_archivo) {
		//$_SESSION['message']="video_guardado";
		header('Location: ../cursos.php');
	}  else {
		//$_SESSION['message']="video_no_guardado";
		header('Location: ../cursos.php');
	}

}
?>