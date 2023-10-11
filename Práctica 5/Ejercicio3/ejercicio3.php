<?php
if (($_SERVER['REQUEST_METHOD'] === 'POST')&&(isset($_SERVER['HTTP_REFERER']))) {

  $sitio = $_SERVER['HTTP_REFERER'];
  $destinatario = $_POST['emailAmigo']; 
  $de = $_POST['emailMio'];
  $asunto = 'Recomendación de sitio web';

  $mensaje = 'Hola, te recomiendo visitar este sitio web: ' . $sitio . '.';

  $headers = 'From: ' . $de . "\r\n" .
    'Reply-To: ' . $de . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mail($destinatario, $asunto, $mensaje, $headers)) {
    echo 'Correo electrónico enviado con éxito.';
  } else {
    echo 'Error al enviar el correo electrónico.';
  }
}
?>

