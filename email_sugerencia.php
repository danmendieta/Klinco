<?php

include("class.phpmailer.php");
include("class.smtp.php");

$mail = new PHPMailer();

//$mail->IsSMTP();                                      // configura SMTP
//$mail->SMTPSecure = "ssl";
//$mail->Host = "smtp.gmail.com";  // especifica server
//$mail->Port = 465;
//$mail->SMTPAuth = true;     // cambia autenticacion
//$mail->Username = "xxx@gmail.com";  // SMTP nombre usuario
//$mail->Password = "xxx"; // SMTP contraseña


$email = $_REQUEST['email'] ;
$mail->From = $email;


$mail->AddAddress("hello@klinco.co", "Klinco");
//$mail->AddAddress("pretxel100@hotmail.com", "Klinco");

$mail->WordWrap = 50;

$mail->IsHTML(true);

$mail->Subject = "Sugerencia Klinco!";


$message = "HOLA!!, mis sugerencias son: ";
$message.= $_REQUEST['message'] ;
$message .= " mi correo electrónico es: ";
$message .= $_REQUEST['email'] ;
$message .= " Saludos!."; 
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
header("Location: index.php");

exit;
echo "Message has been sent";
?>