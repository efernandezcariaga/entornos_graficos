<?php
//Veo si recibo datos del formulario
    if(isset($_POST["style"]))
    {
        $style = $_POST["style"];
        setcookie("style", $style);
        header("Location: index.php");
    }else{
        if (isset($_COOKIE["style"]))
        {
            $style = $_COOKIE["style"];
            header("Location: index.php");

        }
    }
