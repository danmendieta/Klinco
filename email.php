<?php

include("class.phpmailer.php");
include("class.smtp.php");

//get the q parameter from URL
$msj=$_GET["msj"];

$mail = new PHPMailer();

//$mail->IsSMTP();                                      // configura SMTP
//$mail->SMTPSecure = "ssl";
//$mail->Host = "smtp.gmail.com";  // especifica server
//$mail->Port = 465;
//$mail->SMTPAuth = true;     // cambia autenticacion
//$mail->Username = "xxx@gmail.com";  // SMTP nombre usuario
//$mail->Password = "xxx%"; // SMTP contraseña


$email = $_REQUEST['email'] ;
$mail->From = $email;


$mail->AddAddress("hello@klinco.co", "Klinco");
7/$mail->AddAddress("pretxel100@hotmail.com", "Klinco");

$mail->WordWrap = 50;

$mail->IsHTML(true);

$mail->Subject = "Klincofriend!";


$message = "HOLA!!, Estoy interesado en Klinco ";
$message .= "mi correo electrónico es: ";
//$message.= $_REQUEST['message'] ;
$message .= $msj ;
//$message .= $_REQUEST['email'] ;
$message .= " espero tu contacto."; 
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
	$response = "0";
  
}else{
	$response = "1";
}

//output the response
echo $response;
?>