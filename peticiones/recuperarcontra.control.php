<?php
	error_reporting(E_ALL);
	ini_set('display_errors', true);

	if(isset($_POST) && !empty($_POST)){
		echo 'Se ha enviado un enlace a tu correo electrónico..';
	}
?>