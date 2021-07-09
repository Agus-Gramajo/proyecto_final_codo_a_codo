	<?php
	$host = "localhost";    
	$db = "pickings";    
	$usuariodb = "root";    
	$clavedb = "";   


	$tabla_usuarios = "usuarios"; 	   
	$tabla_emprendedores = "emprendedores"; 	   
	$tabla_categoria = "categorias"; 	   
	$tabla_subcat = "subcategorias"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$db);


	if ($conexion->connect_errno) {
	    echo "No es posible la conexion con la Base de Datos....";
	    exit();
	}else{
        
    }
?>