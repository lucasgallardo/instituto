<?php
session_start();
include 'conexion.php';

$user = mysqli_real_escape_string($conexion, $_POST["user"]);
$pass = mysqli_real_escape_string($conexion, $_POST["pass"]);
$email = mysqli_real_escape_string($conexion, $_POST["email"]);

$semilla = "!#$%&/()"; //uso como semilla para encriptar la clave
$user_pass = crypt($pass,$semilla);

$sql = "INSERT INTO user(user_name, user_email, user_pass) VALUES ('$user', '$email', '$user_pass')";
$result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
if ($result) {
  $_SESSION["message"] = '<script>
                          swal("¡Buen trabajo!", "Usuario creado correctamente", "success");
                          </script>';
  header('Location: ../users.php');
}else {
  $_SESSION["message"] = '<script>
                          swal("Error", "No se pudo crear el usuario", "error");
                          </script>';
  header('Location: ../users.php');
}
 ?>
