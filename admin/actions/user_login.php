<?php

session_start();

if (isset($_POST['user_email']) && isset($_POST['password'])) {

    //conexion con base de datos
    include('connect_db.php');

    //Variables con los datos del Formulario de ingreso (form)
    $usuario_form = $_POST['user_email'];
    $clave_form = $_POST['password'];

    //Busca los datos ingresados dentro de la tabla
    $query = "SELECT * FROM usuarios WHERE mail = '$usuario_form' AND password = '$clave_form'";
    $verificar = mysqli_query($conexion, $query);

//Si existe un registro que coincida el email y el pass dentro de la tabla, arma un array con los datos de usuario, las variables de sesion e ingresa al admin panel
    if ($verificar) {
        while ($array_usuarios = mysqli_fetch_array($verificar)) {
            $user_img = $array_usuarios['user_img'];
            $user_name = $array_usuarios['user_name'];
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_img'] = $user_img;

            //ingreso exitoso
            header("Location: ../admin.php");
        }
    } else {
        header("Location: ../forgot-password.html");
    }
}




// if($array_usuarios['contar'] >= 1) {
//     $user_data = "SELECT * FROM usuarios WHERE mail = '$usuario_form' AND password = '$clave_form'";
//     $query_user_data = mysqli_query($conexion, $user_data);
//     $array_user_data = mysqli_fetch_array($query_user_data);
    
//     $user_img = $array_user_data['user_img'];
//     $user_name = $array_user_data['user_name'];
//     $_SESSION['user_name'] = $user_name;
//     $_SESSION['user_img'] = $user_img;
      
//         header("Location: ../admin.php");

//     }
    
// else{
//     header("Location: ../forgot-password.html");
// }
// ;


?>
