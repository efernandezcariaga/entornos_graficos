<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
  if (isset($_SESSION["nombre"])) {
    echo 'Bienvenido'.$_SESSION['nombre'];
    
  } else {
    echo 'No puede entar a esta pagina';
  }
  echo '<a href="index.php">Volver</a>'
  ?> 

</body>
</html>