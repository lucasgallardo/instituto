<?php
$HOST = "localhost";
$USER = "root";
$PASS = "123456";
$DB = "instituto";

// $HOST = "localhost";
// $USER = "u313130102_user";
// $PASS = "ASDqwe123";
// $DB = "u313130102_instituto";

function conectar(){
	global $HOST, $USER, $PASS, $DB;
	$cnx = mysqli_connect($HOST, $USER, $PASS, $DB);
	if (mysqli_connect_errno()) {
		echo "Conexión fallida: ".mysqli_connect_error();
		exit();
	}

	return $cnx;
}

$conexion = conectar();

?>
