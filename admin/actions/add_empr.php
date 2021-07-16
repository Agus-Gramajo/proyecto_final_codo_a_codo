<?php

include("connect_db.php");

    
    
    if (isset($_POST['guardar_emp'])) {

    $emp_name = trim($_POST['name']);
    $emp_cat = intval($_POST['categoria']) ;
    $emp_subcat = intval($_POST['subcategoria']) ;
    $emp_desc =  $_POST['descripcion'];
    $emp_email = trim($_POST['email']);
    $emp_web =  trim($_POST['website']);
    $emp_fb =  trim($_POST['fb']);
    $emp_ig =  trim($_POST['ig']);
    $emp_img =  $_FILES['img']['name'];
    $emp_publicar = intval($_POST['publicar']) ;
    $query = "INSERT INTO `emprendedores` (
        `emp_id`, 
        `emp_name`, 
        `categoria_id`, 
        `subcat_id`, 
        `emp_web`, 
        `emp_fb`, 
        `emp_ig`, 
        `emp_mail`, 
        `emp_img`, 
        `emp_desc`, 
        `emp_publicar`)
    VALUES (
        NULL,
        '$emp_name',
        $emp_cat,
        $emp_subcat,
        '$emp_web',
        '$emp_fb',
        '$emp_ig',
        '$emp_email',
        '$emp_img',
        '$emp_desc',
        $emp_publicar)";

$directorio = 'img_uploads/';
$directorio = $directorio.basename( $_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$directorio); 

                $result = mysqli_query($conexion, $query);
                if(!$result) {
                    die("Fallo la carga");
                }
           
            $_SESSION['message'] = "Datos guardados correctamente";
            $_SESSION['message_type'] = "success";
            
            header("Location: ../agregar_emprendedor.php");

             // echo "<script>
            
            // alert('Los datos se ingresaron correctamente')
            // window.location='../agregar_emprendedor.php';
            // </script>";
    
        }

    // }
    include("desconnect_db.php");
    
   


//  var_dump($emp_cat);
//  var_dump($emp_desc);
//  var_dump($emp_email);
//  var_dump($emp_name);
//  var_dump($emp_subcat);
//  var_dump($emp_web);
//  var_dump($emp_fb);
//  var_dump($emp_ig);
//  var_dump($emp_img);
//  var_dump($emp_publicar);
?>
