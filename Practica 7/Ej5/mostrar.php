 <?php 
 session_start();
  if (isset($_SESSION["name"]) && isset($_SESSION["password"])) {
  echo 'Nombre: '. $_SESSION["name"];
  echo '<br/>Password: '. $_SESSION["password"];
  }else{
    echo 'No hay usuario creado';
  }

  echo '<br/><a href="index.php">Volver</a>'
  
 ?>
 
 
 