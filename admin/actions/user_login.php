<?php

//conexion con base de datos
include('connect_db.php');


//Variables con los datos del Formulario de ingreso (form)
$usuario_form = $_POST['user_email'];
$clave_form = $_POST['password'];






//datos correspondientes a usuario y clave 
//obtenidos de la bd en caso de existir coincidencia con los datos escritos en el formulario 
$verificar = mysqli_query($conexion, "SELECT mail, password FROM usuarios WHERE mail = '$usuario_form' AND password = '$clave_form'");

//si el numero de filas es igual a uno, es porque el usuario y la clave existen en la bd
if (mysqli_num_rows($verificar)==1) {
    
    //ingreso exitoso
    header("Location: ../admin.php");

} else {

    //error de ingreso
    header("Location: ../forgot-password.html");

}


?>
?>