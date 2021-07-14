<?php
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
include("actions/edit_emp.php");
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

        <form action="actions/edit_emp.php?emp_id=<?php echo $_GET['emp_id']?>" method="POST"  class="d-flex flex-column col-10">
    <div class="d-flex flex-row">
        <div class="col-5">
            <input type="text" name="name" id="name" value="<?php echo $emp_name; ?>" class="form-control my-2">
            <select name="categoria" id="categoria" class="form-control mb-2" aria-label="Default select example" >
            <option value="#">Seleccionar categoria...</option>
            <option value=17 onclick="getOption()">Moda</option>
            <option value=18>Casa</option>
            <option value=19>Kids</option>
            <option value=20>Beauty</option>
            <option value=21>Papeleria</option>
            <option value=22>Sustentables</option>
            <option value=23>Party</option>
        </select>
        <select name="subcategoria" id="subcategoria" class="form-control mb-2" aria-label="Default select example">
            <option value="#">Seleccionar subcategoria...</option>
            <option value=17>Ropa</option>
            <option value=18>Zapatos</option>
            <option value=19>Carteras</option>
            <option value=20>Joyeria</option>
            <option value=21>Accesorios</option>
            <option value=22>Lingerie</option>
            <option value=23>Ropa de Hombre</option>
            <option value=17>Muebles</option>
            <option value=18>Deco tela</option>
            <option value=19>Iluminacion</option>
            <option value=20>Objetos</option>
            <option value=21>Velas</option>
            <option value=22>Wall</option>
            <option value=23>Pisos</option>
            <option value=21>Pottery</option>
            <option value=22>Cocina</option>
            <option value=23>Pets</option>
            <option value=21>Plantas</option>
            <option value=22>Ropa</option>
            <option value=23>Muebles</option>
            <option value=21>Accesorios</option>
            <option value=22>Juguetes</option>
            <option value=23>Deco Kids</option>
        </select>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" value="<?php echo $emp_desc; ?>"></textarea>
        <input type="email" name="email" id="email" value="<?php echo $emp_email; ?>" class="form-control my-2">
        <input type="url" name="website" id="website" value="<?php echo $emp_web; ?>" class="form-control my-2">
    
    </div>
    <div class="col-5">
        <input type="url" name="fb" id="fb" value="<?php echo $emp_fb; ?>" class="form-control my-2">
        <input type="url" name="ig" id="ig" value="<?php echo $emp_ig; ?>" class="form-control my-2">
        <label for="img" class="mt-4">Seleccionar imagen</label>
        <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">
        <label for="publicar" class="my-4">Publicar</label>
        <input type="checkbox" id="publicar" value="<?php echo $emp_publicar; ?>"name="publicar">
    </div>
    </div>
        <div>
            <input type="submit" value="Actualizar" class="btn btn-outline-success my-2 mr-2" name="actualizar_emp" id="guardar_emp">
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