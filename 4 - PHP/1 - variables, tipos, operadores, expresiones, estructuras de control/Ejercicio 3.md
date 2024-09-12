# Ejercicio 3
## (A)
```php
<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >"; // Inicia una tabla HTML con un ancho del 90% de la página y un borde de 1 píxel
$row = 5; // Define el número de filas
$col = 2; // Define el número de columnas
for ($r = 1; $r <= $row; $r++) { // Loop para cada fila
    echo "<tr>"; // Inicia una nueva fila
    for ($c = 1; $c <= $col; $c++) { // Loop para cada columna en la fila actual
        echo "<td>&nbsp;</td>\n"; // Imprime una celda vacía en la tabla (espacio en blanco)
    }
    echo "</tr>\n"; // Cierra la fila
}
echo "</table>\n"; // Cierra la tabla
?>
</body></html>
```
## Explicación Detallada

1. **Generación de Tabla HTML**:
   - `echo "<table width='90%' border='1'>";` inicia una tabla HTML con un ancho del 90% del contenedor y un borde de 1 píxel.

2. **Definición de Filas y Columnas**:
   - `$row = 5;` y `$col = 2;` definen que la tabla tendrá 5 filas y 2 columnas.

3. **Creación de Filas**:
   - El primer bucle `for ($r = 1; $r <= $row; $r++)` itera desde 1 hasta el número total de filas (`$row`), creando cada fila en la tabla.
   - Dentro del bucle de filas, `echo "<tr>";` inicia una nueva fila (`<tr>`).

4. **Creación de Columnas**:
   - El segundo bucle `for ($c = 1; $c <= $col; $c++)` itera desde 1 hasta el número total de columnas (`$col`), creando cada celda en la fila actual.
   - `echo "<td>&nbsp;</td>\n";` imprime una celda vacía (`<td>`) en cada iteración del bucle de columnas. `&nbsp;` es un espacio en blanco para que la celda tenga contenido visual.

5. **Cierre de Filas y Tabla**:
   - `echo "</tr>\n";` cierra la fila una vez que se han agregado todas las columnas.
   - Finalmente, `echo "</table>\n";` cierra la tabla después de haber añadido todas las filas y columnas.

## Resultado en la Página Web

El código generará una tabla HTML con 5 filas y 2 columnas, donde cada celda estará vacía, pero tendrá un borde visible. La tabla ocupará el 90% del ancho de la página.

## (B)
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
## Explicación del Código

1. **Formulario HTML**:
   - El código HTML define una estructura básica con un título “Documento 2” y un formulario que solicita la edad del usuario.
   - El formulario utiliza el método `post` para enviar datos al servidor y la acción `<?php echo $_SERVER['PHP_SELF']; ?>` asegura que el formulario se envíe a la misma página que lo contiene. Esto es útil para manejar el formulario en el mismo script PHP.

2. **Estructura Condicional**:
   - `if (!isset($_POST['submit'])) { ... }` verifica si el formulario ha sido enviado o no. La variable `$_POST['submit']` solo está definida si el formulario ha sido enviado, por lo que esta condición evalúa si el formulario aún no ha sido enviado.
   - Si el formulario no ha sido enviado, se muestra el formulario HTML para que el usuario pueda ingresar su edad.

3. **Manejo de Envío del Formulario**:
   - Si el formulario ha sido enviado (`else { ... }`), se recoge el valor ingresado en el campo de edad con `$_POST['age']`.
   - Se realiza una verificación con `if ($age >= 21) { ... }` para determinar si la edad ingresada es mayor o igual a 21. Si es así, se imprime “Mayor de edad”.
   - En caso contrario, se imprime “Menor de edad”.

## Resultado en la Página Web

- **Si el formulario no ha sido enviado**: Se mostrará un formulario con un campo para ingresar la edad y un botón para enviar el formulario.
- **Si el formulario ha sido enviado**: Después de enviar la edad, se mostrará un mensaje indicando si el usuario es “Mayor de edad” o “Menor de edad” basado en la edad ingresada.