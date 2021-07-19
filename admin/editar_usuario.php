<?php
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
include('actions/edit_user.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid" id="add_user_container">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Editar Usuario</h1>

<div>
    <form action="actions/edit_user.php?user_id=<?php echo $_GET['user_id']?>" method="POST"  class="d-flex flex-column col-sm-12 col-md-6 col-lg-4" enctype="multipart/form-data">
        <input type="text" name="user_name" id="user_name" placeholder="Nombre..." class="form-control my-2" value="<?php echo $user_name ?>">
        <input type="email" name="user_email" id="user_email" placeholder="Email..." class="form-control my-2" value="<?php echo $mail ?>">
        <input type="password" name="password" id="password" placeholder="Password..." class="form-control my-2" value="<?php echo $pass ?>">
        <label for="user_img" class="mt-4">Seleccionar imagen de usuario</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
        <input type="file" name="user_img" id="user_img" class="form-control-file my-2 " accept="image/*">
        <div class="profile-thumb-block">
            <img src="actions/img_uploads/<?php echo $row['user_img'] ?>"  alt="profile-image" class="img-thumbnail"/>
        </div>
        <div>

        </div>
        <div>
            <input type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="actualizar_usuario">
            <input type="reset" value="Borrar" class="btn btn-outline-danger my-2">
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once 'includes/footer.php';
?>