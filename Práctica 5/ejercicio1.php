<?php
$destinatario = 'ginogallina2002@gmail.com'; // Dirección de correo electrónico del destinatario
$asunto = 'Asunto del correo electrónico'; // Asunto del correo electrónico

$mensaje = '
<html>
<head>
  <title>Correo electrónico HTML</title>
</head>
<body>
  <h1>Ejemplo de correo electrónico HTML</h1>
  <p>Este es un ejemplo de un correo electrónico con formato HTML.</p>
</body>
</html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ginogallina2002@gmail.com' . "\r\n"; // Dirección de correo electrónico del remitente

if (mail($destinatario, $asunto, $mensaje, $headers)) {
  echo 'Correo electrónico enviado con éxito.';
} else {
  echo 'Error al enviar el correo electrónico.';
}
