# Ejercicio 1
### Código 1
```php
<?php
$a = array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    4
);
?>
```
### Código 2
```php
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>
```

1.	Código 1:
- El array se inicializa directamente con un conjunto de valores.
- Se definen cuatro pares clave-valor ('color', 'sabor', 'forma', 'nombre'), y luego se agrega un valor numérico 4 sin clave asociada.
- PHP automáticamente asigna la clave 0 al valor 4 porque es el primer valor sin clave especificada.
El array resultante es:
```php
array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    0 => 4
);
```
2.	Código 2:
- El array se inicializa vacío y luego se agregan elementos uno por uno.
- Se definen los cuatro pares clave-valor de manera explícita y luego se añade el valor 4 sin clave.
- Similar al Código 1, PHP asigna automáticamente la clave 0 al valor 4.
El array resultante es:
```php
array(
    'color' => 'rojo',
    'sabor' => 'dulce',
    'forma' => 'redonda',
    'nombre' => 'manzana',
    0 => 4
);
```

## Conclusión

Ambos códigos son equivalentes. Ambos fragmentos de código crean un array con los mismos pares clave-valor y un valor adicional 4 que tiene la clave 0. La única diferencia es la forma en que se define el array, pero el resultado final es el mismo en ambos casos.