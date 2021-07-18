<?php
include("connect_db.php");


if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM usuarios WHERE user_id = $user_id";

    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $user_name = $row['user_name'];
        $mail = $row['mail'];
        $password = $row['password'];
        $user_img = $row['user_img'];
        
    }
}

if(isset($_POST['actualizar_usuario'])) {
    $user_id = $_GET['user_id'];
    $user_name = $row['user_name'];
    $mail = $row['mail'];
    $password = $row['password'];
    $user_img = $row['user_img'];

        $query = "UPDATE usuarios SET 
        user_name = '$user_name', 
        mail = '$mail', 
        password = '$password', 
        user_img = '$user_img'
        WHERE emp_id = $emp_id";

        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Datos actualizados correctamente';
        $_SESSION['message_type'] = 'warning';

        header("Location: ../ver_usuarios.php");
}
?>