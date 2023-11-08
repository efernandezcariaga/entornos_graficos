<html>

<head>
  <title>Alta Usuario</title>
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

  if($metro==='si'){
    $metroValor=0;
  }else if($metro==='no'){
    $metroValor = 1;
  }


  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "SELECT * FROM capitales WHERE ciudad='$ciudad'";
  $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
  $ciduadExistente = mysqli_fetch_assoc($vResultado);
  //$vCantUsuarios = mysqli_result($vResultado, 0);
  if ($ciduadExistente) {
    echo ("La Ciudad ya Existe<br>");
    echo ("<A href='index.html'>VOLVER AL ABM</A>");
  }else{

  $vSql = "INSERT INTO capitales (ciudad, pais, habitantes, superficie,tieneMetro)
values ('$ciudad','$pais', '$habitantes', '$superficie', '$metroValor')";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo ("Ciudad registrada");
    echo ("<A href='index.html'>VOLVER AL MENU</A>");
  }
  // Cerrar la conexion
  mysqli_close($link);
  ?></body>

</html>