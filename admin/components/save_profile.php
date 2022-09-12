<?php
session_start();

include_once 'conexion.php';

if (isset($_POST['save_profile'])) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$semilla = "!#$%&/()"; //uso como semilla para encriptar la clave
	$user_pass = crypt($pass,$semilla);

	$query="UPDATE user SET
											 user_name = '$name',
											 user_email = '$email'";
	if($pass != "" and isset($pass)){
		$query.= ", user_pass = '$user_pass'";
	}

	$query.="	WHERE user_id = '$_SESSION[user]' ";

$actualiza = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

$_SESSION['message'] = '<script>
												swal("¡Buen trabajo!", "Información actualizada correctamente", "success");
												</script>';
header('Location: ../profile.php');
}
?>
