<head>
  <title>Modificacion</title>
</head>

<body>
  <?php
  include("configuracion.inc");
  //Captura datos desde el Form anterior
  $ciudad = $_POST['ciudad'];
  $pais = $_POST['pais'];
  $habitantes = $_POST['habitantes'];
  $superficie = $_POST['superficie'];
  $metro = $_POST['respuesta'];
  if ($metro === 'si') {
    $metroValor = 0;
  } else if ($metro === 'no') {
    $metroValor = 1;
  }

  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "UPDATE capitales set  pais='$pais', habitantes='$habitantes', superficie='$superficie', tieneMetro='$metroValor' where
ciudad='$ciudad'";
  mysqli_query($link, $vSql) or die(mysqli_error($link));
  echo ("La Ciudad fue Modificada<br>");
  echo ("<A href= 'index.html'>Volver al Menu del ABM</A>");
  // Cerrar la conexion
  mysqli_close($link);
  ?>
</body>

</html>