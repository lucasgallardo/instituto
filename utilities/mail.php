<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject = $_POST['subject'];

$to="lucagallardo@gmail.com"; //Acá va el mail del cliente
$subject="Consulta desde DreamTime web site - ".$subject ;

$content="Te han escrito una consulta desde el sitio de Dream Time:"."\n\n";
$content.="Nombre: ".$name."\n";
$content.="Correo: ".$email."\n";
$content.="Tipo: ".$subject."\n";
$content.="Mensaje: ".$message."\n";

$headers='From: '.$to."\r\n";

if(mail($to, $subject, $content, $headers)){
		echo "<h5>Gracias! Su mensaje fue enviado</h5>";
	}else{
		echo "<h5>El mensaje no pudó ser enviado, intente más tarde</h5>";
}
?>

