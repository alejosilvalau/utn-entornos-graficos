# Ejercicio 2
### (A)

```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
Análisis:
- La función getdate() devuelve un array asociativo con la fecha y hora actual.
- $fun['hours'], $fun['minutes'], $fun['seconds'], $fun['mday'], $fun['mon'], y $fun['year'] proporcionan las horas, minutos, segundos, día del mes, mes y año respectivamente.
- echo imprimirá una cadena de texto con estos valores.

Salida:
La salida dependerá de la fecha y hora en que se ejecute el script. Ejemplo:
```php
Has entrado en esta pagina a las 14 horas, con 23 minutos y 45 segundos, del 12/9/2024
```
### (B)
```php
<?php
function sumar($sumando1, $sumando2) {
    $suma = $sumando1 + $sumando2;
    echo $sumando1 . "+" . $sumando2 . "=" . $suma;
}
sumar(5, 6);
?>
```
Análisis:
- La función sumar recibe dos parámetros, los suma y luego imprime el resultado en el formato sumando1+sumando2=suma.
- sumar(5, 6); pasará 5 y 6 a la función, resultando en la suma de 11.

Salida:
```php
5+6=11
```