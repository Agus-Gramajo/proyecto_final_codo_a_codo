<?php
//Iniciop de sesion
session_start();
 
//Funcion que chequea si la variable de usuario esta creada
function logged_in() {
	return isset($_SESSION['USER_ID']);
}


//Funcion para redireccionar al usuario en caso que no pueda inciar sesion
function confirm_logged_in() {
if (!logged_in()) {?>
<script type="text/javascript">
window.location = "login.php";
</script>
 
<?php
}
}
?>