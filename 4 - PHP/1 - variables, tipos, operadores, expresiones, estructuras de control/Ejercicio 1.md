# Ejercicio 1: PHP - Identificación de elementos del código

Ejercicio 1:  
En el siguiente código identificar:
- Las variables y su tipo
- Los operadores
- Las funciones y sus parámetros
- Las estructuras de control
- Cuál es la salida por pantalla

```php
<?php
function doble($i) {
    return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>
```

## 1. Variables y su tipo
- `$a`: Es de tipo **booleano** (`TRUE`).
- `$b`: Es de tipo **string** (`"xyz"`).
- `$c`: Es de tipo **string** (`'xyz'`).
- `$d`: Es de tipo **entero** (`12`).
- `$f`: Se define más adelante con el resultado de la función `doble`.
- `$g`: Se define como el resultado de `$f += 10`.

## 2. Operadores
- `*`: Operador de multiplicación, utilizado dentro de la función `doble` (`$i * 2`).
- `+=`: Operador de suma y asignación, utilizado en `$d += 4` y `$g = $f += 10`.
- `? :`: Operador ternario, utilizado en `$d = $a ? ++$d : $d * 3`.
- `++`: Operador de incremento, utilizado en `++$d` y `$d++`.
- `,`: Operador de separación, utilizado en `echo` para imprimir múltiples valores a la vez.

## 3. Funciones y sus parámetros
- **`doble($i)`**: Función que recibe un parámetro `$i` y devuelve el doble de su valor.
- **`gettype($var)`**: Función que devuelve el tipo de una variable. Se utiliza con `$a`, `$b`, `$c`, y `$d`.
- **`is_int($var)`**: Función que verifica si una variable es de tipo entero. Se utiliza con `$d`.
- **`is_string($var)`**: Función que verifica si una variable es de tipo string. Se utiliza con `$a`.
- **`echo`**: Función para imprimir en pantalla.

## 4. Estructuras de control
- **`if (is_int($d)) {}`**: Condición que verifica si `$d` es un entero.
- **`if (is_string($a)) {}`**: Condición que verifica si `$a` es una cadena.
- **Operador ternario**: `$d = $a ? ++$d : $d * 3;` es una estructura de control condicional que incrementa `$d` si `$a` es verdadero, de lo contrario, multiplica `$d` por 3.

## 5. Salida por pantalla
1. Primero se ejecutan las llamadas a `gettype` para cada una de las variables:
   - `gettype($a)` imprime: `boolean`.
   - `gettype($b)` imprime: `string`.
   - `gettype($c)` imprime: `string`.
   - `gettype($d)` imprime: `integer`.
   
2. Luego, si `$d` es un entero (lo cual es cierto), se le suma 4, por lo que `$d` pasa de 12 a 16.

3. Como `$a` no es una cadena, el segundo `if` no imprime nada.

4. El operador ternario `($a ? ++$d : $d * 3)` incrementa `$d` en 1, porque `$a` es `TRUE`. Ahora `$d` vale 17.

5. Se llama a la función `doble` con el valor de `$d++`, es decir, 17. La función retorna `17 * 2 = 34`, pero después de la llamada, `$d` se incrementa a 18.

6. Luego, `$f` es igual a 34 (resultado de la función) y se le suma 10, por lo que `$f` y `$g` valen 44.

7. Finalmente, el `echo` imprime las siguientes variables:
   - `$a`: `1` (representación de `TRUE` en PHP).
   - `$b`: `"xyz"`.
   - `$c`: `'xyz'`.
   - `$d`: `18`.
   - `$f`: `44`.
   - `$g`: `44`.

### Salida completa
```bash
booleanstringstringinteger1xyzxyz184444
```