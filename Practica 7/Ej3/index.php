<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
    echo ' <h1>Hola '.$user.' </h1>';
  } else {
    $user = '';
    echo ' <h1>Todavia no esta registrado</h1>';
  }

  ?>
 
  <form action="crearUsuario.php" method="POST">
    Nombre usuario<input type="text" value='<?php echo $user ?>' name='user' required>
    <button type="submit">Enviar</button>
  </form>

</body>

</html>