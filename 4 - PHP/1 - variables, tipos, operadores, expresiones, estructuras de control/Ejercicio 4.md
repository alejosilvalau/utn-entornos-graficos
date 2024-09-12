# Ejercicio 4

```php
<?php
$color = 'blanco';
$flor = 'clavel';
?>

<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>
```
## Explicación del Código PHP

### 1. Primera Línea:
En esta línea, el código intenta imprimir el valor de las variables `$flor` y `$color` que aún no han sido definidas en este archivo.
- Dado que las variables `$flor` y `$color` no están definidas en este punto, PHP no puede reemplazar estas variables y simplemente imprimirá `El  ` (sin valores para `$flor` y `$color`).
- El `\n` es un carácter de nueva línea que agrega un salto de línea en el texto impreso.

### 2. Inclusión del Archivo `datos.php`:
- Esta línea incluye el contenido del archivo `datos.php`. El archivo `datos.php` define las variables `$color` y `$flor`:
  ```php
  $color = 'blanco';
  $flor = 'clavel';
  ```
### 3. Segunda Línea:

Ahora que `$flor` y `$color` están definidas, esta línea imprimirá `El clavel blanco`.

- El valor de `$flor` es `'clavel'` y el valor de `$color` es `'blanco'`, por lo que la línea se convierte en: `El clavel blanco`.