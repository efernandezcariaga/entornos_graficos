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
  if (isset($_SESSION["name"]) && isset($_SESSION["password"])){
    echo '<a href="mostrar.php">Ver datos</a>';
    echo '<a href="borrar.php">Borrar sesion</a>';
  }else{

    echo '<form action="crearUser.php" method="POST">
    Nombre<input type="text" name="name" id="name"><br>
    Password<input type="password" name="password" id="password"><br>
    <button type="submit">Enviar</button>
  </form>';
  }
  ?>


  

</body>



</html>