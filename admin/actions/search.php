<?php

include("connect_db.php");
header("Location: ../ver_emprendedores.php");

$buscar = $_POST['buscar'];
$where = '';

if(isset($_POST['generar_busqueda'])){

    $where = "WHERE emp_name LIKE '".$buscar."%'";
    
}

?>