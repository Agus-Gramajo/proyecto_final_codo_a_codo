<?php
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
include("actions/connect_db.php");
session_start();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agregar emprendedor</h1>
    
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

        <form action="actions/add_empr.php" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
    <div class="d-flex flex-row">
        <div class="col-5">
            <input type="text" name="name" id="name" placeholder="Nombre..." class="form-control my-2 text-capitalize">
            <select name="categoria" id="categoria" class="form-control mb-2 text-capitalize" aria-label="Default select example" onchange="enviar_valores(this.value);">
                <option value="#" class="text-capitalize">Selecciona una categoria...</option>
                <?php
                
                $query = mysqli_query($conexion, "SELECT * FROM categorias");
                ?>
                <?php
                    while($datos = mysqli_fetch_array($query))
                {?>
            <option value=<?php echo $datos['categoria_id']?> class="text-capitalize"><?php echo $datos['cat_name']?></option>
            <?php }?>
            <script>
                function enviar_valores(){
                var cat = document.getElementById('categoria').value;
                console.log(cat);
                }
            </script>
            <input type="hidden" value="selected_cat">
            <?php 
            $valor=$_GET['selected_cat'];
            echo $valor;
            ?>
        </select>
        <select name="subcategoria" id="subcategoria" class="form-control mb-2 text-capitalize" aria-label="Default select example">
            <option value="0">Seleccionar subcategoria...</option>
            <?php
                $categoria=$_GET['categoria'];
               
                $query = "SELECT * FROM categorias INNER JOIN subcategorias ON categorias.categoria_id = subcategorias.categoria_id WHERE categorias.categoria_id = $valor";
                $result = mysqli_query($conexion, $query);
                ?>
                <?php
                    while($datos = mysqli_fetch_array($result))
                    
                {?>
            <option value="<?php echo $datos['subcategorias.subcat_id']?>" class="text-capitalize"><?php echo $datos['subcategorias.subcat_name']?></option>
            <?php var_dump($datos['subcategorias.subcat_id']);}?>
          
        </select>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción..."></textarea>
        <input type="email" name="email" id="email" placeholder="Email..." class="form-control my-2">
        <input type="url" name="website" id="website" placeholder="Website..." class="form-control my-2">
   
    </div>
    <div class="col-5">
        <input type="url" name="fb" id="fb" placeholder="Facebook link..." class="form-control my-2">
        <input type="url" name="ig" id="ig" placeholder="Instagram link..." class="form-control my-2">
        <label for="img" class="mt-4">Seleccionar imagen</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
        <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">
        <label for="publicar" class="my-4">Publicar</label>
        <input type="checkbox" id="publicar" value=1 name="publicar">
    </div>
    </div>
        <div>
            <input type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_emp" id="guardar_emp">
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