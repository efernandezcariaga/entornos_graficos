<?php
//Veo si recibo datos del formulario
if (isset($_POST["user"])) {
  $user = $_POST["user"];
  setcookie("user", $user);
  header("Location: index.php");
} else {
  echo 'Error';
}
