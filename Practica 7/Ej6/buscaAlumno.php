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
  include("configuracion.inc");
  $email = $_GET['email'];
  $vSql = "SELECT * FROM alumnos where mail='$email'";
  $vResultado = mysqli_query($link, $vSql);
  $total_registros = mysqli_num_rows($vResultado);
  if($total_registros>0){
    $fila = mysqli_fetch_array($vResultado);
    $_SESSION['nombre'] = $fila["nombre"];
  }
  header("Location: index.php");
  ?>  


</body>
</html>