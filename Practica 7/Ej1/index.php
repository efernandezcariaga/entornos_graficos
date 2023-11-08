<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  //miro si he tengo un estilo definido, porque entonces tengo que cargar la

  if (isset($_COOKIE["style"])) {
    echo '<link rel="STYLESHEET" type="text/css" href="' . $_COOKIE["style"] . '.css">';
  }else{
    echo '<link rel="STYLESHEET" type="text/css" href="blanco.css">';
  }

  ?>
</head>

<body>
  <form action="cambio.php" method="POST">
    <label for="">Elegir estilo</label><br>
    <input type="radio" value="rojo" name="style">Rojo
    <input type="radio" value="azul" name="style">Azul
    <input type="radio" value="verde" name="style">Verde <br>
    <input type="radio" value="blanco" name="style">Blanco <br>
    <button type="submit">Enviar</button>
  </form>


</body>

</html>