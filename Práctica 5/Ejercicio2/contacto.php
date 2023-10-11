<?php
$fecha = date("d-m-Y");
$hora = date("H :i:s");
$destino = "webmaster@gmail.com"; 
$asunto = "Consulta";
$desde = 'From:' . $_POST['email'];
$comentario = "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[consulta]\n
Enviado: $fecha a las $hora\n
\n
";
  if(mail($destino, $asunto, $comentario, $desde)){
    echo "Su consulta ha sido enviada, en breve recibirá nuestra
  respuesta.";
  }else{
  echo "Error al enviar el mail";
  };
  ?>