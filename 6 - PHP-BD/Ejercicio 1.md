Practica 6

Ejercicio 1: Completar

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. 

Para inicializar esta conexión, PHP ofrece la función mysqli_connect(mysql_connect). Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: $hostname, $nombreUsuario, $contraseña. Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función mysqli_select_db(mysql_select_db). Esta función debe pasar como parámetro el nombre de la conexión y el de la base de datos. La función mysqli_query () se utiliza para ejecutar una consulta de SQL a la Base de Datos especificada, y requiere como parámetros el nombre de la conexión, y la query. La cláusula or die() se utiliza para capturar el error[a], y la función mysqli_error () se puede usar para devolver el último mensaje de error para la llamada más reciente a una función mysqli que puede haberse ejecutado correctamente o fallado.
Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código.

Explicación Código:

```php
<?php
while ($fila = mysqli_fetch_array($vResult))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResult);
mysqli_close($link);
?>
```

Este codigo PHP se utiliza para mostrar el resultado de una consulta a una base de datos MySQL dentro de una tabla HTML.
Se imprimen los valores de las primeras tres columnas de cada fila y despues de recorrer todas las filas, libera la memoria usada para almacenar el resultado y cierra la conexion a la base de datos.
	
