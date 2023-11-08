<?php
include('producto.php');
include('funciones.php');
    session_start();
    
    

        $misProductos = $_SESSION['compras'];
        $id = $_POST['id'];
        $fila = mysqli_fetch_assoc(getOne($id));
        $myProduct = new Producto();
            $myProduct -> setId($fila['id']);
            $myProduct -> setPrecio($fila['precio']);
            $myProduct -> setProducto($fila['producto']);
        $misProductos[] = $myProduct;
        $_SESSION['compras'] = $misProductos;
    
   header("Location: index.php");
?>
