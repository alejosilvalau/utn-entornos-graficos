<?php
function monstrarNoticia($noticia)
{
  if ($noticia == 'politica') {
    echo '<h2>Se vienen las elecciones</h2>';
    echo '<p>Titular ' . $noticia . '</p>';
  } else if ($noticia == 'economica') {
    echo '<h2>Inflación del 50%</h2>';
    echo '<p>Titular ' . $noticia . '</p>';
  } else if ($noticia == 'deportiva') {
    echo '<h2>Argentina campeón</h2>';
    echo '<p>Titular ' . $noticia . '</p>';
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
  <title>Ejercicio 4</title>
</head>

<body>
  <h1>Ejercicio 4</h1>

  <?php if (isset($_COOKIE['noticia'])) { ?>
    <table border=2 padding=2>
      <td>
        <?php monstrarNoticia($_COOKIE['noticia']); ?>
      </td>
    </table>
  <?php } else { ?>
    <table border=2 padding=2>
      <td>
        <h2>Inflación del 50%</h2>
        <p>Titular económico</p>
      </td>
      <td>
        <h2>Argentina campeón</h2>
        <p>Titular deportivo</p>
      </td>
      <td>
        <h2>Se vienen las elecciones</h2>
        <p>Titular político</p>
      </td>
    </table>
  <?php } ?>
  <br>
  <form action="./noticia.php" method="post">
    Seleccione el titular que deseas que aparezca en el diario:<br>
    <input type="radio" name="noticiaActual" value="politica"> Noticia política <br>
    <input type="radio" name="noticiaActual" value="economica"> Noticia económica<br>
    <input type="radio" name="noticiaActual" value="deportiva"> Noticia deportiva<br>
    <br>
    <input type="submit" value="Confirmar">
  </form>
  <br>
  <form action="./borrarCookie.php" method="post">
    <input type="submit" value="Borrar cookies">
  </form>
</body>

</html>