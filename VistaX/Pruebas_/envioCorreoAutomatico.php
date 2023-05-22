<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form>
            <input type="email">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>
<?php 
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Credenciales SMTP
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'tu_correo@gmail.com';
$mail->Password = 'tu_contraseña';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Destinatario
$recipient_email = $_POST['email'];

// Contenido del correo electrónico
$mail->setFrom('tu_correo@gmail.com', 'Tu Nombre');
$mail->addAddress($recipient_email);
$mail->Subject = 'Asunto del correo';
$mail->Body = 'Hola, este es un mensaje de prueba enviado desde mi sitio web.';

// Envía el correo electrónico
if(!$mail->send()) {
   echo 'El mensaje no se pudo enviar. Error: ' . $mail->ErrorInfo;
} else {
   echo 'El mensaje se envió correctamente.';
}

?>