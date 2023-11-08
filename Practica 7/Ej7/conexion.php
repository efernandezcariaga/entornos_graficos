<?php
    $hostname = "localhost";
    $nombreUsuario = "root";
    $password ="123456";
    $db = "compras";
    $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
    mysqli_select_db($link,$db);
?>
