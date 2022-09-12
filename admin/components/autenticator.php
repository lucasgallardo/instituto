<?php

session_start();
include('conexion.php');

if(isset($_POST['enter'])){
  $user = mysqli_real_escape_string($conexion, $_POST["user"]);
  $pass = mysqli_real_escape_string($conexion, $_POST["pass"]);

  $semilla = "!#$%&/()"; //uso como semilla para encriptar la clave
  $user_pass = crypt($pass,$semilla);

  $sql = "SELECT user_id, user_name FROM user WHERE (user_name='$user' OR user_email='$user') AND user_pass='$user_pass'";
  $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
  if ($row=mysqli_fetch_array($result)) {
    $_SESSION["user"] = $row["user_id"];
    $_SESSION["name"] = $row["user_name"];
    header('Location: ../index.php');
  }else {
    $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
                              Usuario o contraseña inexistente.
                            </div>';
    header('Location: ../login.php');
  }
}

?>
