<?php
session_start();

if (!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 1;
} else {
  $_SESSION['contador']++;
}

echo '<p>Has visitado la página ' . $_SESSION['contador'] . ' veces</p>';
?>
<a href="ejercicio4.php">Recargar Página</a>
<a href="borrarSesion.php">Borrar Sesión</a>