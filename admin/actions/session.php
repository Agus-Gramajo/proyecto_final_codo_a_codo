<?php

 
//Funcion que chequea si la variable de usuario esta creada
function logged_in() {
	return isset($_SESSION['USER_ID']);
	var_dump($_SESSION['USER_ID']);
}
