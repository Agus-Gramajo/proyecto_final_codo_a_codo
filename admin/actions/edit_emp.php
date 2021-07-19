<?php
include("connect_db.php");
if(isset($_GET['emp_id'])) {
    $emp_id = $_GET['emp_id'];
    $query = "SELECT * FROM emprendedores WHERE emp_id = $emp_id";

    $result = mysqli_query($conexion, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $emp_name = $row['emp_name'];
        $emp_cat = $row['categoria_id'];
        $emp_subcat = $row['subcat_id'];
        $emp_desc = $row['emp_desc'];
        $emp_email = $row['emp_mail'];
        $emp_web = $row['emp_web'];
        $emp_fb = $row['emp_fb'];
        $emp_ig = $row['emp_ig'];
        $emp_img =  $_FILES['img']['name'];
        $emp_publicar = $row['emp_publicar'];
    }
}

if(isset($_POST['actualizar_emp'])) {
        $emp_id = $_GET['emp_id'];
        $emp_name = $_POST['name'];
        $emp_cat = $_POST['categoria'];
        $emp_subcat = $_POST['subcategoria'];
        $emp_desc = $_POST['descripcion'];
        $emp_email = $_POST['email'];
        $emp_web = $_POST['website'];
        $emp_fb = $_POST['fb'];
        $emp_ig = $_POST['ig'];
        $emp_img =  $_FILES['img']['name'];
        $emp_publicar = $_POST['publicar'];

        $query = "UPDATE emprendedores SET emp_name = '$emp_name', 
        categoria_id = '$emp_cat', 
        subcat_id = '$emp_subcat', 
        emp_desc = '$emp_desc', 
        emp_fb = '$emp_fb',
        emp_ig = '$emp_ig', 
        emp_img = '$emp_img', 
        emp_publicar = '$emp_publicar', 
        emp_web = '$emp_web',
        emp_mail = '$emp_email'
        WHERE emp_id = $emp_id";

        $directorio = 'img_uploads/';
        $directorio = $directorio.basename( $_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'],$directorio); 

        mysqli_query($conexion, $query);

        $_SESSION['message'] = 'Datos actualizados correctamente';
        $_SESSION['message_type'] = 'warning';

        header("Location: ../ver_emprendedores.php");
}
?>