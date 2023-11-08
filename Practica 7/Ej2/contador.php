<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  if (isset($_COOKIE["contador"])) {
    setcookie("contador", $_COOKIE["contador"]+1, time() + 3600 * 24 * 365);
    echo 'Ha visitado esta página <b>'. $_COOKIE["contador"].'</b> veces';

  } else {
    echo '<h1>Bienvenido</h1>';
    setcookie("contador", 0);
  }

  ?>

</body>

</html>