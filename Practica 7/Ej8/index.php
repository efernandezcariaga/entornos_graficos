<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_COOKIE['canciones'])) {
    $mibusqueda = $_COOKIE['canciones'];
  } else {
    $mibusqueda = '';
  }
  ?>

  <form action="buscar.php" method="POST">
    Cancion<input type="text" name="cancion">
    <button type="submit">Enviar</button>
  </form>

  <?php
  if (isset($mibusqueda)) {
    echo $mibusqueda;
  } else {
    echo "No se encontró la busqueda";
  }
  ?>
</body>

</html>