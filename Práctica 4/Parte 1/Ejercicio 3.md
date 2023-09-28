# Ejercicio 3
Explicar para qué se utiliza el siguiente código;

## a)


```php
<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
    }   
    echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>
```

Esyte código sirve para realizar una tabla de un ancho del 90% con un borde, que tenga 5 filas y dos columnas, y que en cada lugar de la tabla se encuntre en caracter '&nbsp;', que es un espacio en blanco.

## b)

```php
<html>
<head><title>Documento 2</title></head>
<body>
<?php
    if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
    </form>
<?php
}
else {
    $age = $_POST['age'];
    if ($age >= 21) {
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad';
    }
}
?>
</body></html>
```

Este código primero verifica si ya se realizó un envio de un formulario con un metodo POST, si no se ha realizado se muestra dicho formulario para que se pueda hacer su envio.
Una vex realizado el envio o si se había realizado previamente, de muestra 'Mayor de edad' o 'Menor de edad' dependiendo del valor de la edad que se haya enviado en el formulario