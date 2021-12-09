<?php
	require_once '../../../../backend/auth/sesiones.php';
	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../../backend/auth/log-out.php");
	else require_once 'agregar-vinculo.view.php';
?>