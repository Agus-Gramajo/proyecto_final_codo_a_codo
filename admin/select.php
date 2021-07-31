<?php
include('./actions/connect_db.php');

$categoria=$_POST['categoria'];

	$query="SELECT *
		from subcategorias
		where id_categoria='$categoria'";

	$result=mysqli_query($conexion,$query);

	$cadena="
			<select id='subcategoria' name='subcategoria'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	


?>