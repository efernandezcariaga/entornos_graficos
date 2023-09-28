# Ejercicio 1

Indicar si los siguientes códigos son equivalentes.

```php
<?php
$a = array( 'color' => 'rojo',
            'sabor' => 'dulce',
            'forma' => 'redonda',
            'nombre' => 'manzana',
            4
        );
?>

<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>

```

Si, los códigos son equivalentes. Se muestran todas las formas de inicializar los valores de un arreglo.
Cuando no se define una 'key', se le da un valor automatico que en estos casos sería 0