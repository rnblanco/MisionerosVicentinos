<?php

	require_once "../../../backend/conexion.php";
	require_once '../../../backend/auth/sesiones.php';

    /* 
    Orden de tabla publicaciones:
    <th>ID</th>
    <th>País</th>
    <th>Contenido</th>
    <th>Imagen</th>
    <th>Acciones</th>
    */

	class Santoral extends DB{

		public function Escritores(){
			$stipo = $_SESSION['tipo'];
			$conexion = $this->conectar();
			$buscarEscritores = $conexion->prepare("SELECT * FROM santoral ORDER BY Id");
			$buscarEscritores->execute();
			$Escritores = $buscarEscritores->fetchAll();

			foreach($Escritores as list($id, $pais, $texto, $imagen)){

				$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
				if( strlen($texto) >=200 ){
					$texto = substr($texto, 0, 200); $texto .= "...";
				}

				echo" 
                <tr>
                    <td>$id</td>
                    <td>$pais</td>
                    <td>$texto</td>
                    <td><img class='card-img-top' src='../../../backend/images/santoral-images/$imagen' alt='Card image cap' style='height:150px!important;width:200px!important;'></td>            
                    <td>
                        <a href='editar/editar-santoral.php?id=$id' class='btn btn-warning btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>  Editar</span></a><div class='my-2'></div>
                        <a style='color:white' class='btn btn-danger btn-block' onclick='del($id)'><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>  Borrar</span></a>
                    </td>
                </tr>
            ";
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'santoral.view.php';
?>