<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';
include_once "admin/actions/connect_db.php";
?>

 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sustentables</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Sustentables</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        
        <div class="section-title" data-aos="zoom-out">
          <h2>Emprendedores</h2>
          <p>Sustentables</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">Todos</li>
          <?php 
        
              
              

              $query = "SELECT subcategorias.subcat_name FROM categorias INNER JOIN subcategorias ON categorias.categoria_id = subcategorias.categoria_id WHERE categorias.cat_name = 'sustentables'";
              $result = mysqli_query($conexion, $query);
             

              while($row = mysqli_fetch_array($result)) { ?>
              <li data-filter=".filter-<?php echo $row['subcat_id'];?>"><?php echo $row['subcat_name'];?></li>
              <?php } ?>
          
          <!-- <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li> -->
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">
        <?php 
        
              

              $query = "SELECT * FROM emprendedores INNER JOIN categorias ON emprendedores.categoria_id = categorias.categoria_id WHERE emprendedores.emp_publicar = 1 AND categorias.cat_name = 'sustentables'";
           
              $result = mysqli_query($conexion, $query);
             

              while($row = mysqli_fetch_array($result)) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row['categoria_id'];?>">
                  <div class="portfolio-img"><img src="admin/actions/img_uploads/<?php echo $row['emp_img'];?>" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                      <h4><?php echo $row['emp_name'];?></h4>
                      <p><?php echo $row['emp_desc'];?></p>
                      <a href="/admin/actions/img_uploads/<?php echo $row['emp_img'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $row['emp_desc'];?>"><i class="bx bx-plus"></i></a>
                      <a href="<?php echo $row['emp_web'];?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                
              <?php } ?>
            

         
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->



<?php
require_once 'includes/footer.php';

?>
