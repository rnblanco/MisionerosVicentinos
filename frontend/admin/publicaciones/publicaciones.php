<?php
	require_once '../../../backend/conexion.php';
	require_once '../../../backend/auth/sesiones.php';
    /*
    Orden de tabla publicaciones:
    <th>Autor</th>
    <th>Sección</th>
    <th>Título</th>
    <th>Cuerpo</th>
    <th>Imagen</th>
    <th>Estado</th>
    <th>Acciones</th>
    */

	class Publi extends DB{
		public function Publicaciones(){
			$user="";
			$conexion = $this->conectar();
			$buscarPublicaciones = $conexion->prepare("SELECT * FROM publicaciones ORDER BY id_Publicacion");
			$buscarPublicaciones->execute();
			$Publicaciones = $buscarPublicaciones->fetchAll();

			foreach($Publicaciones as list($idPublicacion, $id_Usuario, $titulo, $cuerpo, $imagen, $estado, $seccion)){
				$buscarUsuario = $conexion->prepare("SELECT Nombre from usuarios WHERE Id_Usuario = '$id_Usuario' ");
				$buscarUsuario->execute();
				$usuarios = $buscarUsuario->fetchAll();
				foreach($usuarios as $usuario){
					$user=$usuario['Nombre'];
				}

				$imagen==""?$imagen="../../../backend/images/default-images/imagen_no_disponible.png":$imagen;
				if( strlen($cuerpo) >=200 ){
					$cuerpo = substr($cuerpo, 0, 200); $cuerpo .= "...";
				}
				echo" 
                <tr>
                    <td>$user</td>    
                    <td>$seccion</td>
                    <td>$titulo</td>
                    <td>$cuerpo</td>";
				if($estado==1){
					echo"<td>
                        Deshabilitada
                        <a onclick='hab($idPublicacion)' style='color:white!important' class='btn btn-success btn-icon-split'>
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
                        <a onclick='deshab($idPublicacion)' style='color:white!important' class='btn btn-secondary btn-icon-split'>
                            <span class='icon text-white-50'>
                            <i class='fas fa-times'></i>
                            </span>
                            <span class='text'>Deshabilitar</span>
                        </a>
                        </td>";
				}
				echo"
                    <td><img class='card-img-top' src='../../../backend/images/posts-images/$imagen' alt='Card image cap' style='height:125px!important;width:250px!important;'></td>
                    <td>
                        <a href='editar/editar-publicacion.php?id=$idPublicacion' class='btn btn-warning btn-icon-split btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>Editar</span></a><div class='my-2'></div>
                        <a onclick='delAdmin($idPublicacion)' style='color:white' class='btn btn-danger btn-icon-split btn-block' ><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>Borrar</span></a>
                        
                    </td>
                </tr>
            ";
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../backend/auth/log-out.php");
	else require_once 'publicaciones.view.php';
?>