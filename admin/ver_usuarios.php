<?php
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
include("actions/connect_db.php");

$ver_usuarios = "SELECT * FROM usuarios";

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Usarios</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usarios</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          $query = "SELECT * FROM usuarios";
          $result_usuarios = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_usuarios)) { ?>
          <tr>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['mail']; ?></td>
          
            <td class="text-center align-middle"><a href="edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
            <td class="text-center align-middle"><a href="delete_task.php?id=<?php echo $row['id']?>"><i class="fas fa-trash"></i></a></td>   
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