<?php
if (isset($_COOKIE["songs"])) {
  $search = $_COOKIE["songs"];
} else {
  $search = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
</head>

<body>
  <form action="searchSong.php" method="post">
    <p>Buscar una canción: </p>
    <input type="text" name="cancion" id="">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <?php
  if (isset($search)) {
    echo $search;
  } else {
    echo "Ingrese una canción";
  }
  ?>
</body>

</html>