<?php

//Inicio de sesion
/*session_start();

if (isset($_POST['btnlogin'])) {
    $user_email = trim($_POST['user_email']) ;
    $pass = trim($_POST['password']);

if (isset($_POST['user_email']) && isset($_POST['password'])) {
    
    $rs = mysqli_query($conexion, "SELECT mail FROM usuarios WHERE mail = '".$_POST['user_email']." ' AND password = '".$_POST['password']."';");

    if(!$rs){
        echo "<h1>Usuario no existe</h1>";
    }else{
        while($consulta = mysqli_fetch_array($rs))
        {
            $_SESSION["esta_logueado"] = true;
            $_SESSION["usuario"] = $consulta["usuario"];
            header('Location: login.php');
            exit;
        }
    }
}else{

        ?>    <script type="text/javascript">
              window.location = "../forgot-password.html";
          </script>
        <?php       
    }   
}*/


// include("connect_db.php");

// $user_email = trim($_POST['user_email']) ;
// $pass = trim($_POST['password']);

// function user_login($user_email, $pass)
// {
//     if (isset($user_email) && isset($pass)) {
//         $conexion = mysqli_connect(
//             'localhost',
//             'root',
//             '',
//             'pickings',
//         );

//         $user_query = mysqli_query($conexion, "SELECT mail FROM usuarios WHERE mail = '$user_email' AND password = '$pass'  LIMIT 1 ");
    

//         if (!$user_query) {
//             echo "<script type='text/javascript'>
//             window.location = '../forgot-password.html';
//             </script>";
//         } else {
//             header('Location: ./admin.php');
//         }
//     }
// }




//Variables con los datos del Formulario de ingreso (form)
$usuario_form = $_POST['user_email'];
$clave_form = $_POST['password'];


//conexion con base de datos
include('connect_db.php');


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