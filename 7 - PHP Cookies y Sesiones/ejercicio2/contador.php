<?php if (isset($_COOKIE['contador'])) {
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 3600);
} else {
    setcookie('contador', 1, time() + 3600);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Ejercicio 2</h1>
    <?php if (isset($_COOKIE['contador'])) { ?>
        <p>Has visitado la página <?php echo $_COOKIE['contador'] ?> veces.</p>
    <?php } else { ?>
        <p>Bienvenido al contador de visitas! Tomá una galletita.</p>
    <?php } ?>
</body>

</html>