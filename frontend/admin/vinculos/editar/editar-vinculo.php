<?php

	require_once "../../../../backend/conexion.php";
	require_once '../../../../backend/auth/sesiones.php';

    class EditarVinculo extends DB{
	    function Cargar(){
		    $conexion = $this->conectar();
		    $id = $_GET['id'];

		    $buscarPublicacion = $conexion->prepare("SELECT * FROM vinculos WHERE Id_Vinculo = ? ");
		    $buscarPublicacion->execute([$id]);
		    $Publicacion = $buscarPublicacion->fetchAll();

		    foreach($Publicacion as list($idHistorial, $pais, $imagen, $texto)){

			    $imagen==""?$imagen="../../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
			    $imagen2 = $imagen;
			    $imagen2 = explode("/", $imagen2);

			    echo"
                    <input id='ids' class='seccion-input' value='"; echo ("{$_GET['id']}"); echo "'>
                    <div class='form-group'> <label class='form-control-label'>Imagen * :</label> <br><img src='../../../../backend/images/links-images/$imagen' id='preview' class='img-thumbnail' style='height:250px!important;width:300px!important;'><br><div id='msg'></div><input type='file' name='img' id='img' class='file' accept='image/*' onblur='validate1(3)'><div class='input-group my-3'><input type='text' class='form-control' disabled placeholder='$imagen2[2]' id='file'><div class='input-group-append'><button type='button' class='browse btn btn-primary'>Subir</button></div></div></div> 
                    <div class='form-group'> <label class='form-control-label'>País:</label> <input onkeypress='javascript:return tprotection(event)'' type='text' id='pais' class='form-control' onblur='validate1(1)' value='$pais'></div>
                    <div class='form-group'> <label class='form-control-label'>Cuerpo:</label> <textarea onkeypress='javascript:return bprotection(event)'' type='text' id='texto' class='form-control' onblur='validate1(2)'>$texto</textarea></div>
                    <button id='next' class='btn-block btn-primary mt-3 mb-1 next mt-4' type='submit'>EDITAR<span class='fa fa-long-arrow-right'></span></button>
                ";
		    }
	    }
    }

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../../backend/auth/log-out.php");
	else require_once 'editar-vinculo.view.php';
?>