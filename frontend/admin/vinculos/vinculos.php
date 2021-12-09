<?php
	require_once "../../../backend/conexion.php";
	require_once '../../../backend/auth/sesiones.php';

	/*
	Orden de tabla publicaciones:
	<th>ID</th>
	<th>Titulo</th>
	<th>Imagen</th>
	<th>Enlace</th>
	<th>Acciones</th>
	*/
    
    class Vinculos extends DB{
		public function Escritores(){
			$stipo = $_SESSION['tipo'];
			$conexion = $this->conectar();
			$buscarEscritores = $conexion->prepare("SELECT * FROM vinculos ORDER BY id_vinculo");
			$buscarEscritores->execute();
			$Escritores = $buscarEscritores->fetchAll();

			foreach($Escritores as list($id, $titulo, $imagen, $enlace)){

				$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;

				echo" 
                <tr>
                    <td>$id</td>
                    <td>$titulo</td>
                    <td>$enlace</td>
                    <td><img class='card-img-top' src='../../../backend/images/links-images/$imagen' alt='Card image cap' style='height:150px!important;width:200px!important;'></td> 
                    <td>
                        <a href='editar/editar-vinculo.php?id=$id' class='btn btn-warning btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>  Editar</span></a><div class='my-2'></div>
                        <a style='color:white' class='btn btn-danger btn-block' onclick='del($id)'><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>  Borrar</span></a>
                    </td>
                </tr>
            ";
			}
		}
    }

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'vinculos.view.php';
?>