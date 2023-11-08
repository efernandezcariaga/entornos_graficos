<?php
    function getAll(){
            include('conexion.php');
            $vSql = "Select * from catalogo";
            $vResultado = mysqli_query($link,$vSql);
            mysqli_close($link);
            return $vResultado;
        }

    function getOne($id){
        include('conexion.php');
        $vSql = "Select * from catalogo where id='$id'";
        $vResultado = mysqli_query($link,$vSql);
        mysqli_close($link);
        return $vResultado;

    }    



    ?>
