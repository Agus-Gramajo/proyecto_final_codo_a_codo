<?php
include("connect_db.php");


    $user_id = $_GET['user_id'];
    $query = "DELETE FROM usuarios WHERE user_id = $user_id";
    
    var_dump($_GET['user_id']);
    $result_usuarios = mysqli_query($conexion, $query);

    if(!$result_usuarios) {
        die("Fallo la acción");
    }

    $_SESSION['message'] = "Datos eliminados correctamente";
    $_SESSION['message_type'] = 'danger';
    header('Location:../ver_usuarios.php');
;
?>