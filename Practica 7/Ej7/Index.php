
<?php
    include_once("producto.php");
    session_start();
    $i=0;
    if(isset($_SESSION['compras']))
    {
        $misCompras = $_SESSION['compras'];
    }else{
        $_SESSION['compras'] = array();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("funciones.php");
        $myResults = getAll();
    ?>
    <table>
      
            <tr>
                <th>#</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        <?php
            while($fila = mysqli_fetch_array($myResults))
            {
        ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['producto'] ?></td>
                <td><?php echo $fila['precio'] ?></td>
                <td>
                <form action="agregaProducto.php" method="POST">
                <input name="id" value="<?php echo $fila['id'] ?>" hidden>
                <input type="submit" value="Agregar al carrito" onclick="confirm('Quiere Comprar este producto?')" >
                </form>
                <td>
            </tr>
            <?php
                }
            ?>
    </table>
    
    <?php
       
        foreach($misCompras as $compra)
        {
            
            echo "<table>";
            echo "<td>".$compra -> getId()."</td>"."<br>";
            echo "<td>".$compra -> getPrecio()."</td>"."<br>";
            echo "<td>".$compra -> getProducto()."</td>"."<br>";
            echo "</table>";
        }

    ?>
            
</body>
</html>
