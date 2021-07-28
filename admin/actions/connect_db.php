<?php

session_start();

$conexion = mysqli_connect(
	'localhost',
	'root',
	'',
	'pickings',
);

if(mysqli_connect_errno($conexion)){

    echo 'No se pudo conectar a la db';
    header("location:./admin.php");

}

?>