<?php
$conn = mysqli_connect("localhost", "root", '') or die("Hubo un problema con la conexion a la BD");
mysqli_select_db($conn, "prueba");
