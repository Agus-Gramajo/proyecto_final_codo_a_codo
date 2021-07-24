<?php
//conexion con base de datos
include('connect_db.php');
session_start();

//Variables con los datos del Formulario de ingreso (form)
$usuario_form = $_POST['user_email'];
$clave_form = $_POST['password'];

//datos correspondientes a usuario y clave 
//obtenidos de la bd en caso de existir coincidencia con los datos escritos en el formulario 
$query = "SELECT * FROM usuarios WHERE mail = '$usuario_form' AND password = '$clave_form'";

$verificar = mysqli_query($conexion, $query);

$array_usuarios = mysqli_fetch_array($verificar);
    
$user_img = $array_usuarios['user_img'];
$user_name = $array_usuarios['user_name'];

$_SESSION['user_name'] = $user_name;
$_SESSION['user_img'] = $user_img;



//si el numero de filas es igual a uno, es porque el usuario y la clave existen en la bd
if (mysqli_num_rows($verificar)==1) {
    
    //ingreso exitoso
    header("Location: ../admin.php");
    
    
} else {
  //error de ingreso
  header("Location: ../forgot-password.html");
// var_dump($_SESSION['user_img']);
}

?>
