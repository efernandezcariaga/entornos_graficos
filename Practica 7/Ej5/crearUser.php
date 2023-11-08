<?php
session_start();
if (isset($_POST["name"]) && isset($_POST["password"])) {
  $_SESSION['name'] = $_POST["name"];
  $_SESSION['password'] = $_POST["password"];
  header("Location: index.php");
}else{
  echo 'error';
}
?>