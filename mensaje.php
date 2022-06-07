<?php

echo "entra a mensaje";
//declaracion de variables

$mensaje= $_POST['message'];
$correo= $_POST['email'];
$name= $_POST['name'];
<<<<<<< Updated upstream
$empresa= $_POST['subject'];


	
$to = "dario.quiroz@sysred.com.mx";
$subject = "Correo Parque industrial: " .$empresa;
$headers = "correo:".$correo;
$txt = $mensaje."n\n\n" . "Atentamente:".$name."\n"."Empresa:".$empresa."\n"."Correo:".$correo."\n";

if(empty($_POST['name'])  ||
   empty($_POST['correo']) ||
   empty($_POST['mensaje']))
{
	$error .= "\n Error: Todos los campos son requeridos";
}
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $error .= "\n Error: Correo invalido";
}
=======
$empresa=$_POST['empresa'];
//$empresa= $_POST['subject'];


$to = "dario.quiroz@sysred.com.mx, gil.q.c.dq@gmail.com, emilio.garcia@sysred.com.mx, nancy.torres@sysred.com.mx";
	
$subject = "Correo de la página de sysred " ;
$headers = "correo:".$correo;
$txt =  "Nombre: $name\n $mensaje\n Atentamente :$name de $empresa";



$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= "From: $name \n  $correo";
$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n"; 

mail($to, $subject, $txt, $headers);
>>>>>>> Stashed changes

if( empty($errors))
{
	mail($to,utf8_decode($subject),utf8_decode($txt),utf8_decode($headers));
} else {
	echo $error;
}
?>





