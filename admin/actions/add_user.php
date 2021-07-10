<?php
$user_name = trim($_POST['user_name']) ;
$user_email = trim($_POST['user_email']) ;
$pass = trim($_POST['password']) ;

include("connect_db.php");

if(mysqli_query($conexion, "INSERT INTO `usuarios` (
    `user_id`, 
    `user_name`, 
    `mail`, 
    `password`
    )
VALUES (
    NULL,
    '$user_name',
    '$user_email',
    '$pass'
     )")){
  
  echo "<script>alert('Los datos se ingresaron correctamente')</script>";
  header('Location: ../agregar_usuario.php');
  
}

else{
  echo "Hubo un error";
}


include("desconnect_db.php");

?>