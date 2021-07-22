<?php 
require_once './includes/sidebar.php';
require_once 'includes/navbar.php';
include("actions/connect_db.php");

$emprendedores = "SELECT * FROM emprendedores";


?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Listado de emprendedores</h1>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Emprendedores</h6>
    </div>
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
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Subcategoria</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Web</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Link imagen</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Publicar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          $query = "SELECT *, categorias.cat_name, subcategorias.subcat_name from categorias inner join emprendedores on emprendedores.categoria_id = categorias.categoria_id 
          inner join subcategorias on emprendedores.subcat_id = subcategorias.subcat_id";
          $result_emprendedores = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_emprendedores)) { ?>
          <tr>
            <td class="text-capitalize"><?php echo $row['emp_name']; ?></td>
            <td class="text-capitalize"><?php echo $row['cat_name']; ?></td>
            <td class="text-capitalize"><?php echo $row['subcat_name']; ?></td>
            <td class="text-capitalize"><?php echo $row['emp_desc']; ?></td>
            <td class="text-lowercase"><?php echo $row['emp_mail']; ?></td>
            <td class="text-lowercase"><?php echo $row['emp_web']; ?></td>
            <td class="text-lowercase"><?php echo $row['emp_fb']; ?></td>
            <td class="text-lowercase"><?php echo $row['emp_ig']; ?></td>
            <td><?php echo $row['emp_img']; ?></td>
            
            <td class="text-center align-middle"><a href="./editar_emp.php?emp_id=<?php echo $row['emp_id']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
            <td class="text-center align-middle"><a href="./actions/delete_emp.php?emp_id=<?php echo $row['emp_id']?>"><i class="fas fa-trash"></i></a></td>
            <td class="text-center align-middle"><input type="checkbox" id="publicar" 
            <?php if( $row['emp_publicar']==1) {?>
            <?php echo "checked"?>
            <?php }?>
        

            ></td>
   
          </tr>
          <?php } ?>
                      
                                       
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require_once 'includes/footer.php';
?>