<?php
include('connect_db.php');
session_start();




$cont_name = trim($_POST['cont_name']) ;
$cont_mail = trim($_POST['cont_mail']) ;
$cont_subject = trim($_POST['cont_subject']) ;
$cont_msg = trim($_POST['cont_msg']) ;

$to = $cont_name;
$subject = $cont_subject;
$message = $cont_msg;
$headers = 'From: hola@pickings.com' . "\r\n" .
            'Reply-To: ' .$cont_mail. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
    


    $query = "INSERT INTO contactos (
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
        $_SESSION['message'] = "Mensaje enviado correctamente";
        $_SESSION['message_type'] = 'success';
        header('Location: ../../index.php#contact');
    };


    


?>
