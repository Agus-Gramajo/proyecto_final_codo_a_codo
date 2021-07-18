<?php

include("connect_db.php");
$user_name = trim($_POST['user_name']) ;
$user_email = trim($_POST['user_email']) ;
$pass = trim($_POST['password']) ;
$user_img =  $_FILES['user_img']['name'];

if(mysqli_query($conexion, "INSERT INTO `usuarios` (
  `user_id`, 
  `user_name`, 
  `mail`, 
  `password`, 
  `user_img`
  )
VALUES (
  NULL,
  '$user_name',
  '$user_email',
  '$pass',
  '$user_img'
   )")){
  
  $directorio = 'img_uploads/';
  $directorio = $directorio.basename( $_FILES['user_img']['name']);
  move_uploaded_file($_FILES['user_img']['tmp_name'],$directorio); 


  echo "<script>alert('Los datos se ingresaron correctamente')</script>";
  header('Location: ../ver_usuarios.php');
  
}

else{
  echo "Hubo un error";
}


include("desconnect_db.php");

?>
<!-- 
$user_name = trim($_POST['user_name']) ;
  $user_email = trim($_POST['user_email']) ;
  $pass = trim($_POST['password']);
  $user_img =  $_FILES['img']['name'];
  $query = "INSERT INTO `usuarios` (
    `user_id`, 
    `user_name`, 
    `mail`, 
    `password`, 
    `user_img`
    )
VALUES (
    NULL,
    '$user_name',
    '$user_email',
    '$pass',
    '$user_img'
     )";

$directorio = 'img_uploads/';
$directorio = $directorio.basename( $_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$directorio); 

                $result = mysqli_query($conexion, $query);
                if(!$result) {
                    die("Fallo la carga");
                }
           
            $_SESSION['message'] = "Datos guardados correctamente";
            $_SESSION['message_type'] = "success";
            
            header("Location: ../agregar_usuario.php"); -->
