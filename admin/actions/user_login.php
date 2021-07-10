<?php

//Inicio de sesion
session_start();

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
}


?>