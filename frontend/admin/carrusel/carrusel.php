<?php
    require_once "../../../backend/conexion.php";
    require_once '../../../backend/auth/sesiones.php';

	class Carrusel extends DB {

		/*
		Orden de tabla publicaciones:
		<th>ID</th>
		<th>Imagen</th>
		<th>Estado</th>
		<th>Acciones</th>
		*/

		function Escritores(){
			$stipo = $_SESSION['tipo'];
			$conexion = $this->conectar();
			$buscarEscritores = $conexion->prepare("SELECT * FROM slider ORDER BY ID");
			$buscarEscritores->execute();
			$Escritores = $buscarEscritores->fetchAll();

			foreach($Escritores as list($id, $imagen, $estado)){

				$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;

				echo" 
                <tr>
                    <td>$id</td>
                    <td><img class='card-img-top' src='../../../backend/images/slider-images/$imagen' alt='Card image cap' style='height:150px!important;width:200px!important;'></td>";
				if($estado==1){
					echo"<td>
                        Deshabilitada
                        <a onclick='hab($id)' style='color:white!important' class='btn btn-success btn-icon-split'>
                            <span class='icon text-white-50'>
                            <i class='fas fa-check'></i>
                            </span>
                            <span class='text'>Habilitar</span>
                        </a>
                        </td>";
				}
				else if($estado==2){
					echo"<td>
                        Habilitada
                        <a onclick='deshab($id)' style='color:white!important' class='btn btn-secondary btn-icon-split'>
                            <span class='icon text-white-50'>
                            <i class='fas fa-times'></i>
                            </span>
                            <span class='text'>Deshabilitar</span>
                        </a>
                        </td>";
				}
				echo"      
                    <td>
                        <a href='editar/editar-imagen.php?id=$id' class='btn btn-warning btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>  Editar</span></a><div class='my-2'></div>
                        <a style='color:white' class='btn btn-danger btn-block' onclick='del($id)'><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>  Borrar</span></a>
                    </td>
                </tr>
            ";
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'carrusel.view.php';
?>