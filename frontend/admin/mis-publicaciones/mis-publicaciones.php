<?php
	require_once "../../../backend/conexion.php";
	require_once '../../../backend/auth/sesiones.php';

    /* 
    Orden de tabla publicaciones:
    <th>Sección</th>
    <th>Título</th>
    <th>Cuerpo</th>
    <th>Imagen</th>
    <th>Acciones</th>
    */

	class MisPublicaciones extends DB{

		public function Publica(){
			$id = $_SESSION['id'];
			$conexion = $this->conectar();
			$buscarPublicaciones = $conexion->prepare("SELECT * FROM publicaciones WHERE Estado = 2 AND Id_Usuario = ? ORDER BY Id_Publicacion");
			$buscarPublicaciones->execute([$id]);
			$Publicaciones = $buscarPublicaciones->fetchAll();

			foreach($Publicaciones as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen, $estado, $seccion)){

				$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
				if( strlen($cuerpo) >=200 ){
					$cuerpo = substr($cuerpo, 0, 200); $cuerpo .= "...";
				}
				echo" 
                <tr>
                    <td>$seccion</td>
                    <td>$titulo</td>
                    <td>$cuerpo</td>
                    <td><img class='card-img-top' src='../../../backend/images/posts-images/$imagen' alt='Card image cap' style='height:125px!important;width:250px!important;'></td>
                    <td>
                        <a href='../publicaciones/editar/editar-publicacion.php?id=$idPublicacion' class='btn btn-warning btn-icon-split btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>Editar</span></a><div class='my-2'></div>
                        <a style='color:white' class='btn btn-danger btn-icon-split btn-block' onclick='del($idPublicacion)'><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>Borrar</span></a>
                    </td>
                </tr>
            ";
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../Db/log-out.php");
	else require_once 'mis-publicaciones.view.php';
?>