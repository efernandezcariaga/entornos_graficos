<?php 
        if(!isset($_POST['submit']))
        {
        $titular = $_POST['titular'];
        setcookie("titular", $titular , time()+ 3600*24*365);
        }
  
          header("Location: index.php");
