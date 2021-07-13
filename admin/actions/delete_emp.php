<?php
include("connect_db.php");

if(isset($_GET['emp_id'])) {
    $emp_id = $_GET['emp_id'];
    $query = "DELETE FROM emprendedores WHERE emp_id = $emp_id";

    $result = mysqli_query($conexion, $query);

    if(!$result) {
        die("Fallo la acción");
    }

    $_SESSION['message'] = "Datos eliminados correctamente";
    $_SESSION['message_type'] = 'danger';
    header('Location:../ver_emprendedores.php');
};
?>