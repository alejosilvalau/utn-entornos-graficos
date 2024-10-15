<?php
setcookie('noticia', '', time() - 3600);
header('Location: ./ejercicio4.php');
