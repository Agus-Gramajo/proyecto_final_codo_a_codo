<?php

session_start();

$conexion = mysqli_connect(
	'localhost',
	'root',
	'',
	'pickings',
);

if(mysqli_connect_errno()){

    echo 'No se pudo conectar a la db';
    header("location:./admin.php");
}else{
    
}

$query=mysqli_query($conexion, "SELECT * FROM emprendedores");

//var_dump($query);

$listadoArrayAsociativo = mysqli_fetch_assoc($query);


?>