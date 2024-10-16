<?php
function getAll()
{
    include('connection.php');
    $query = "SELECT * FROM catalogo";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}

function getById($id)
{
    include('connection.php');
    $query = "SELECT * FROM catalogo WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}
