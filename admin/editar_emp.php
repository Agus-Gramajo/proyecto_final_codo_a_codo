<?php
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
include("actions/edit_emp.php");
session_start();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Editar emprendedor</h1>
    
    <!-- Content Row -->
    <!-- <div id="okMessage"> -->
    <div class="row">
    <div class="col-md-4">
    <?php 
        if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    <?php session_unset(); } ?>
    </div>
    </div>
  
    <!-- </div> -->

<form action="actions/edit_emp.php?emp_id=<?php echo $_GET['emp_id']?>" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-5">
            <input type="text" name="name" id="name" value="<?php echo $emp_name; ?>" class="form-control my-2">
            <select name="categoria" id="categoria" class="form-control mb-2" aria-label="Default select example" >
                <option value="#">Selecciona una categoria...</option>
                <?php
                
                $query = mysqli_query($conexion, "SELECT * FROM categorias");
                ?>
                <?php
                    while($datos = mysqli_fetch_array($query))
                {?>
            <option value="<?php echo $datos['categoria_id']?>" class="text-capitalize"><?php echo $datos['cat_name']?></option>
            <?php }?>
            
        </select>
        <select name="subcategoria" id="subcategoria" class="form-control mb-2" aria-label="Default select example">
            <option value="#">Seleccionar subcategoria...</option>
            <?php
                
                $query = mysqli_query($conexion, "SELECT * FROM subcategorias");
                ?>
                <?php
                    while($datos = mysqli_fetch_array($query))
                {?>
            <option value="<?php echo $datos['subcat_id']?>" class="text-capitalize"><?php echo $datos['subcat_name']?></option>
            <?php }?>
    
        </select>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" value="<?php echo $emp_desc; ?>"></textarea>
            <input type="email" name="email" id="email" value="<?php echo $emp_email; ?>" class="form-control my-2">
            <input type="url" name="website" id="website" value="<?php echo $emp_web; ?>" class="form-control my-2">
        </div>
        <div class="col-12 col-md-5">
            <input type="url" name="fb" id="fb" value="<?php echo $emp_fb; ?>" class="form-control my-2">
            <input type="url" name="ig" id="ig" value="<?php echo $emp_ig; ?>" class="form-control my-2">
            <label for="img" class="mt-4">Seleccionar imagen</label>
            <?php if($row['emp_img'] == "") {?>
                <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
                <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">
            <?php }else{?>
            <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">
            <img src="actions/img_uploads/<?php echo $row['emp_img'] ?>"  alt="profile-image" class="img-thumbnail"/></br>
            <?php } ?>
            <label for="publicar" class="my-4">Publicar</label>
            <?php if( $row['emp_publicar']==1) {?>
            <input type="checkbox"  value=1 id="publicar" name="publicar" checked>
            <?php }else{ ?>
                <input type="checkbox" id="publicar" value=0 name="publicar">
            <?php } ?>
        </div>
    </div>
    <div>
        <input type="submit" value="Actualizar" class="btn btn-outline-success my-2 mr-2" name="actualizar_emp" id="guardar_emp">
        <input type="reset" value="Borrar" class="btn btn-outline-danger my-2">
    </div>
        <a href="ver_emprendedores.php" class="btn btn-outline-warning " style="width: fit-content;">Volver</a>
</form>
    
  
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once 'includes/footer.php';
?>