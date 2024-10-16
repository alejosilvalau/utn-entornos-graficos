<?php
include("../entities/prod.php");
include("../bd/getFuncs.php");

session_start();

$arrProds = $_SESSION["compras"];
$id = $_POST["id"];
$row = mysqli_fetch_assoc(getById($id));

if ($row != null) {
  $prod = new Prod();
  $prod->setId($row["id"]);
  $prod->setNom($row["producto"]);
  $prod->setPrecio($row["precio"]);
  $arrProds[] = $prod;
  $_SESSION["compras"] = $arrProds;
} else {
  echo '<script>alert("El id ingresado no corresponde a ningun producto")</script>';
}
header("Location: ../index.php");
