<html>

<head>
  <title>Baja</title>
</head>

<body>
  <?php
  include("configuracion.inc");
  $ciudad = $_POST['ciudad'];
  $vSql = "SELECT * FROM capitales WHERE ciudad='$ciudad' ";
  $vResultado = mysqli_query($link, $vSql);
  if (mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='formBaja.html'>Continuar</A>");
  } else {
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "DELETE FROM capitales WHERE ciudad = '$ciudad' ";
    mysqli_query($link, $vSql);
    echo ("La ciudad fue Borrada<br>");
    echo ("<A href='index.html'>Volver al Menu del ABM</A>");
  }
  // Liberar conjunto de resultados
  mysqli_free_result($vResultado);
  // Cerrar la conexion
  mysqli_close($link);
  ?>
</body>

</html>