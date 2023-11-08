<?php
if (isset($_COOKIE['titular'])) {
  $miTitular = $_COOKIE['titular'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($miTitular)) {
    echo "<h1>'$miTitular'<h1> ";
    echo '<form   action="borrarTitular.php" method="POST">
                     <input type="submit" value="Borrar Titular">
                 </form>';
  } else {
    echo "<h1>Elegir un titular<h1>";
    echo '<form   action="generarTitular.php" method="POST">
                        <input type="radio"name="titular" value="Noticia Deportiva"> Noticia Deportiva
                         <br>
                        <input type="radio"name="titular" value="Noticia Economica"> Noticia Economica
                         <br>
                         <input type="radio"name="titular" value="Noticia Politica"> Noticia Politica
                            <br>
                        <input type="submit" value="Establecer Titular">
                </form>';
  }
  ?>




</body>

</html>