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
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Detalle</th>
                        <th>Mail</th>
                        <th>Web</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Link imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Publicar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          $query = "SELECT * FROM emprendedores";
          $result_emprendedores = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_emprendedores)) { ?>
          <tr>
            <td><?php echo $row['emp_name']; ?></td>
            <td><?php echo $row['categoria_id']; ?></td>
            <td><?php echo $row['subcat_id']; ?></td>
            <td><?php echo $row['emp_desc']; ?></td>
            <td><?php echo $row['emp_mail']; ?></td>
            <td><?php echo $row['emp_web']; ?></td>
            <td><?php echo $row['emp_fb']; ?></td>
            <td><?php echo $row['emp_ig']; ?></td>
            <td><?php echo $row['emp_img']; ?></td>
            
            <td class="text-center align-middle"><a href="edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
            <td class="text-center align-middle"><a href="delete_task.php?id=<?php echo $row['id']?>"><i class="fas fa-trash"></i></a></td>
                        <td class="text-center align-middle"><input type="checkbox" id="publicar"></td>
   
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