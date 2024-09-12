<?php
// Función para comprobar el nombre de usuario
function comprobar_nombre_usuario($nombre_usuario){
    // Compruebo que el tamaño del string sea válido.
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }
    
    // Compruebo que los caracteres sean los permitidos
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i = 0; $i < strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }
    
    // Si cumple todas las condiciones, es válido
    echo $nombre_usuario . " es válido<br>";
    return true;
}

// Probar la función con diferentes nombres de usuario
comprobar_nombre_usuario("usuario_valido");     // Debería ser válido
comprobar_nombre_usuario("inv@lido");           // Debería ser inválido (carácter no permitido)
comprobar_nombre_usuario("us");                 // Debería ser inválido (menos de 3 caracteres)
comprobar_nombre_usuario("usuario_super_largo_123"); // Debería ser inválido (más de 20 caracteres)
comprobar_nombre_usuario("nombre_valido_123");  // Debería ser válido
?>
