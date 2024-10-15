<?php if (isset($_POST["usuario"])) {
  setcookie('usuario', $_POST['usuario'], time() + 3600);
  header("Location: " . $_SERVER['PHP_SELF']);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>

<body>
  <h1>Ejercicio 3</h1>
  <?php if (isset($_COOKIE['usuario'])) {
    echo '<p>Ultimo nombre de usuario ingresado: ' . $_COOKIE['usuario'] . '</p>';
    echo '<p>Ingrese uno nuevo para cambiarlo</p>';
  } else {
    echo '<p>Ingrese un nombre de usuario:</p>';
  } ?>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="usuario" id="usuario">
    <input type="submit" value="Cambiar nombre">
  </form>

</body>

</html>