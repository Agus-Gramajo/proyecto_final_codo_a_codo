<?php
include('../admin/actions/connect_db.php');


    $cont_name = trim($_POST['cont_name']) ;
    $cont_mail = trim($_POST['cont_mail']) ;
    $cont_subject = trim($_POST['cont_subject']) ;
    $cont_msg = trim($_POST['cont_msg']) ;
    
    $query = "INSERT INTO 'contactos'(
    `cont_name`, 
    `cont_mail`, 
    `cont_subject`, 
    `cont_msg`) 
    VALUES (
    '$cont_name',
    '$cont_mail',
    '$cont_subject',
    '$cont_msg')";

    if(mysqli_query($conexion, $query)){
        echo "<script>alert('Su mensaje se envio correctamente')</script>";
        header('Location: ./index.php');
    };


?>
