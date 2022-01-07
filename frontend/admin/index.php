<?php
    require_once '../../backend/auth/sesiones.php';

	if(isset($_SESSION['usuario'])){
		$usuario = $_SESSION['usuario'];
		if($usuario != '') require_once 'index.view.php';
		else header("Location :../../backend/auth/log-out.php");
	}
    else header("Location: ./auth/login.php");
?>