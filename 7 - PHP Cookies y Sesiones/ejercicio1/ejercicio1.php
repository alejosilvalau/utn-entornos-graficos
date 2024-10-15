<?php

if (isset($_POST["estilo"])) {
  $estilo = $_POST["estilo"];
  setcookie("estilo", $estilo, time() + 3600);
} else {
  if (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
  <title>Ejercicio 1</title>
  <?php if (isset($estilo)) {
    echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
  } ?>
</head>

<body>
  <h1>Ejercicio 1</h1>
  <form action="Ejercicio1.php" method="post">
    <p>Seleccione el estilo de la página:</p>

    <select name="estilo">
      <option value="verde">Verde</option>
      <option value="rojo">Rojo</option>
      <option value="azul">Azul</option>
    </select>
    <input type="submit" value="Actualizar el estilo">
  </form>
</body>

</html>