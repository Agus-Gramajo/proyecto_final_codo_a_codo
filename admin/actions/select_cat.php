<?php
include("connect_db.php");

$query = mysqli_query($conexion, "SELECT cat_name FROM categorias");
echo $query;

?>