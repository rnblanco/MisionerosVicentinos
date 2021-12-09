<?php

	require_once "../../../backend/conexion.php";
	require_once '../../../backend/auth/sesiones.php';

    class EditarRadio extends DB{

		public function Cargar(){
			$conexion = $this->conectar();
			$id = $_GET['id'];

			$buscarPublicacion = $conexion->prepare("SELECT * FROM radio WHERE Id_radio = ? ");
			$buscarPublicacion->execute([$id]);
			$Publicacion = $buscarPublicacion->fetchAll();

			foreach($Publicacion as list($idHistorial, $pais, $texto)){

				echo"
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <div class='form-group'> <label class='form-control-label'>Texto:</label> <textarea onkeypress='javascript:return bprotection(event)'' type='text' id='texto' class='form-control' onblur='validate1(2)'>$pais</textarea></div>
                    <div class='form-group'> <label class='form-control-label'>Enlace:</label> <input onkeypress='javascript:return tprotection(event)'' type='text' id='pais' class='form-control' onblur='validate1(1)' value='$texto'></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
			}
		}
    }

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'editar-radio.view.php';
?>