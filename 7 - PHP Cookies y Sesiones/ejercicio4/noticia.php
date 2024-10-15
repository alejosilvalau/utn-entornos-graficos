<?php
setcookie('noticia', $_POST['noticiaActual'], time() + 3600);
header('Location: ./ejercicio4.php');
