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
        <?php 
        if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    <?php session_unset(); } ?>
    </div>
    <div class="card-body">
        <div class="container col-lg-12 d-flex flex-wrap">

        
    <?php
          $query = "SELECT * FROM usuarios";
          $result_usuarios = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_usuarios)) { ?>
            <div class="col-md-3">
    		    <div class="card profile-card-3">
    		        <div class="background-block">
    		            <img src="../assets/img/back_acuarela.png" alt="profile-sample1" class="background"/>
    		        </div>
    		        <div class="profile-thumb-block">
    		            <img src="actions/img_uploads/<?php echo $row['user_img'] ?>"  alt="profile-image" class="profile"/>
    		        </div>
    		        <div class="card-content">
                    <h2><?php echo $row['user_name']; ?></h3>
                    <div class="icon-block"><a href="editar_usuario.php?user_id=<?php echo $row['user_id']?>"><i class="fas fa-edit btn-outline-success"></i></a><a href="actions/delete_user.php?user_id=<?php echo $row['user_id']?>"> <i class="fas fa-trash"></i></a></div>
                    </div>
                </div>
    		</div>
            <?php } ?>
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