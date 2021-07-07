<?php 
require_once './includes/sidebar.php';
require_once 'includes/navbar.php';

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
                        <tr>
                            <td>Ejemplo nombre</td>
                            <td>Ejemplo categoria</td>
                            <td>Ejemplo subcategoria</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, placeat!</td>
                            <td>Ejemplo mail</td>
                            <td>Ejemplo web</td>
                            <td>Ejemplo Instagram</td>
                            <td>Ejemplo Facebook</td>
                            <td>Ejemplo Link imagen</td>
                            <td class="text-center align-middle"><a href="#"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="#"><i class="fas fa-trash"></i></a></td>
                            <td class="text-center align-middle"><input type="checkbox" id="publicar"></td>
                        </tr>
                        
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