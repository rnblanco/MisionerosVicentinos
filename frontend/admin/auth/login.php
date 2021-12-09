<?php
    require_once '../../../backend/auth/sesiones.php';
    if(empty($_SESSION['usuario'])) require_once 'login.view.php';
    else header("Location: ../index.php");
?>