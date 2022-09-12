<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$course = $_POST['course'];

$to="laumolina.mza@gmail.com"; //Acá va el mail del cliente
$subject="Consulta cobre el curso: ".$course;

$content="Te han escrito desde el sitio de Dream Time:"."\n\n";
$content.="Nombre: ".$name."\n";
$content.="Correo: ".$email."\n";
$content.="Teléfono: ".$phone."\n";
$content.="Curso: ".$course."\n";
$content.="Mensaje: ".$message."\n";

$headers='From: '.$to."\r\n";

if(mail($to, $subject, $content, $headers)){
		echo "<h5>Gracias! Su mensaje fue enviado</h5>";
	}else{
		echo "<h5>El mensaje no pudó ser enviado, intente más tarde</h5>";
}
?>

