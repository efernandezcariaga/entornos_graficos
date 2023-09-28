# Ejercicio 4

Si el archivo datos.php contiene el código que sigue:
```php
<?php
$color = 'blanco';
$flor = 'clavel';
?>
```
Indicar las salidas que produce el siguiente código. Justificar.
```php
<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>
```


La salida que se produce es:

```
El 
 El clavel blanco
```
El motivo es que en el primer echo las varables $flor y $color no estan definidas porque todavia no se incluyo el script datos.php, en el segundo echo ya se incluyo el archivo.