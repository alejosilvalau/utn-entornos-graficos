<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>

    <h1>Perfil</h1>
    <p>Nombre de usuario: <?php echo $_SESSION['usuario'] ?></p>
    <p>Clave: <?php echo $_SESSION['clave'] ?></p>
    <a href="./index.html">Volver a Inicio</a>
</body>

</html>