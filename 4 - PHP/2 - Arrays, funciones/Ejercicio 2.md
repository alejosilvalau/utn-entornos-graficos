# Ejercicio 2
### (A)
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
```
Análisis:
- Se crea un array asociativo con dos elementos: "x" => "bar" y 12 => true.
- echo $matriz["x"]; imprimirá el valor asociado a la clave "x", que es "bar".
- echo $matriz[12]; imprimirá el valor asociado a la clave 12, que es true.

Salida:
```php
bar1
```

### (B)
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>
```
Análisis:
- Se crea un array con una clave "unamatriz" que contiene otro array.
- Dentro del array anidado, las claves 6, 13, y "a" tienen los valores 5, 9, y 42 respectivamente.
- echo $matriz["unamatriz"][6]; imprimirá el valor 5.
- echo $matriz["unamatriz"][13]; imprimirá el valor 9.
- echo $matriz["unamatriz"]["a"]; imprimirá el valor 42.

Salida:
```php
59242
```

### (C)
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42;
unset($matriz[5]);
unset($matriz);
?>
```
Análisis:
- Se crea un array con claves 5 y 12 con valores 1 y 2 respectivamente.
- $matriz[] = 56; agrega el valor 56 con una clave numérica autogenerada. La próxima clave disponible es 0, por lo que se añade 56 en $matriz[0].
- $matriz["x"] = 42; agrega un elemento con clave "x" y valor 42.
- unset($matriz[5]); elimina el elemento con clave 5.
- unset($matriz); elimina el array completo.

Salida:
No hay salida visible para este código, ya que el array es eliminado con unset($matriz);. No se imprime nada, y el script termina sin errores.