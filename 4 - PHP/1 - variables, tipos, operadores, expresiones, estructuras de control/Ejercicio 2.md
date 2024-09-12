# Ejercicio 2
## A)
### Código 1:
```php
<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
?>
```
Análisis:
-   Inicialización: $i se inicia en 1.
-	Condición del bucle: $i <= 10.
-	Acción en cada iteración: print $i++. Imprime el valor de $i y luego incrementa $i después de imprimir.
-	Salida: Imprime los números del 1 al 10, uno en cada línea.

### Codigo 2:
```php
<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>
```
Análisis:
-   Inicialización: $i se inicia en 1.
-   Condición del bucle: $i <= 10.
-   Acción en cada iteración: print $i; imprime el valor de $i y luego $i++ incrementa $i.
-   Salida: Imprime los números del 1 al 10, uno en cada línea.

### Código 3:
```php
<?php
$i = 0;
do {
    print ++$i;
} while ($i < 10);
?>
```
Análisis:
-   Inicialización: $i se inicia en 0.
-   Condición del bucle: $i < 10.
-   Acción en cada iteración: print ++$i; incrementa $i antes de imprimir.
-   Salida: Imprime los números del 1 al 10, uno en cada línea.

### Conclusión

Los códigos 1, 2 y 3 son equivalentes en términos de la salida que producen. Todos imprimen los números del 1 al 10, uno por línea.

- Código 1: Usa la sintaxis estándar del while con la post-incrementación ($i++).
- Código 2: Usa la sintaxis alternativa del while con incremento en la línea siguiente ($i++).
- Código 3: Usa do...while con pre-incrementación (++$i), que también imprime los números del 1 al 10.

## B)

A continuación, se evaluará si los siguientes fragmentos de código son equivalentes.

## Código 1:
```php
<?php 
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
?>
```
Descripción:
Este ciclo for recorre los números del 1 al 10 e imprime cada número en cada iteración.

## Código 2:
```php
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>
```
Descripción:
Este ciclo for también recorre los números del 1 al 10. Sin embargo, la impresión de los números ocurre en la parte de la expresión "de actualización" del ciclo, lo que es válido en PHP. La estructura es equivalente a la del primer código en cuanto a comportamiento.

### Código 3:
```php
<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>
```
Descripción:
Este ciclo for tiene una condición vacía, lo que significa que el ciclo continuará indefinidamente hasta que se ejecute el break. Sin embargo, dentro del ciclo se incluye una condición para detener la ejecución cuando $i sea mayor que 10. Este código también imprime los números del 1 al 10 y es equivalente a los anteriores.

### Código 4:
```php
<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>
```
Descripción:
Este ciclo for es infinito porque no tiene condiciones de parada en la declaración del ciclo, pero incluye un break dentro del bloque para salir cuando $i sea mayor que 10. La variable $i se incrementa manualmente. El comportamiento es idéntico a los códigos anteriores.

### Conclusion
A pesar de que cada código utiliza una estructura ligeramente diferente, todos los fragmentos son funcionalmente equivalentes. Todos imprimen los números del 1 al 10, aunque varían en la manera de organizar la lógica del ciclo for. 


## C)
### Código 1:
```php
<?php
// ...
// ...
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
?>
```
Análisis:
- Uso: La estructura if...elseif permite evaluar múltiples condiciones, ejecutando el bloque de código correspondiente al primer if o elseif cuya condición sea verdadera.
- ventajas:
-	Flexibilidad para condiciones más complejas.
Adecuado para evaluaciones que no se limitan a un conjunto específico de valores.
- Desventajas:
-P uede volverse menos legible y más difícil de mantener con muchas condiciones.

### Código 2:
```php
<?php
// ...
// ...
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
?>

```
Análisis:
- Uso: La estructura switch es ideal para seleccionar entre varios bloques de código basados en el valor de una sola variable.
- Ventajas:
- Más legible y estructurada cuando se trata de evaluar una variable contra múltiples valores.
- Ideal para casos donde se deben manejar múltiples opciones discretas.
- Desventajas:
- Menos flexible para condiciones complejas que involucran múltiples variables o operaciones lógicas.

### Comparación

- Ambos códigos logran el mismo objetivo de imprimir un mensaje basado en el valor de $i.
- El switch es generalmente preferido para este tipo de comparación cuando el número de casos es conocido y limitado, ya que ofrece una sintaxis más clara y fácil de seguir.
- El if...elseif puede ser más adecuado si se necesitan evaluar condiciones más complejas o si los valores a comparar no son simples constantes.

### Conclusión

La elección entre if...elseif y switch depende del contexto y la complejidad de las condiciones que se necesitan evaluar. Para casos simples con múltiples valores discretos, switch es más limpio y legible. Para condiciones más complejas o múltiples variables, if...elseif ofrece mayor flexibilidad.