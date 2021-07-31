<?php 
// Incluyo coenxion a la db
include('./actions/connect_db.php');
 
if (!empty($_POST["categoria"])) {

    // Fetch state data based on the specific country
    $query = "SELECT * FROM subcategorias WHERE categoria_id = ".$_POST['categoria']." ORDER BY subcat_name ASC";
    $result = $conexion->query($query);
     
    // Generate HTML of state options list
    if ($result->num_rows > 0) {
        echo '<option value="">Select Subcategoria...</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['subcat_id'].'">'.$row['subcat_name'].'</option>';
        }
    } else {
        echo '<option value="">Subcategoria no dsponible</option>';
    }
}
?>