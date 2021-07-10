<?php

    include("connect_db.php");

 $emp_name = trim($_POST['name']);
 $emp_cat = intval($_POST['categoria']) ;
 $emp_subcat = intval($_POST['subcategoria']) ;
 $emp_desc =  $_POST['descripcion'];
 $emp_email = trim($_POST['email']);
 $emp_web =  trim($_POST['website']);
 $emp_fb =  trim($_POST['fb']);
 $emp_ig =  trim($_POST['ig']);
 $emp_img =  $_POST['img'];
 $emp_publicar = intval($_POST['publicar']) ;

    
    
    // if (isset($_POST['guardar_emp'])) {
        if (mysqli_query($conexion, "INSERT INTO `emprendedores` (
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
        $emp_publicar)")) {
            echo "<script>alert('Los datos se ingresaron correctamente')
      window.location='../agregar_emprendedor.php';
      </script>";
        } else {
            echo "Hubo un error";
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
