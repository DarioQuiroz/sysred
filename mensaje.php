<?php

echo "entra a mensaje";
//declaracion de variables

$mensaje= $_POST['message'];
$correo= $_POST['email'];
$name= $_POST['name'];
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

if( empty($errors))
{
	mail($to,utf8_decode($subject),utf8_decode($txt),utf8_decode($headers));
} else {
	echo $error;
}
?>





