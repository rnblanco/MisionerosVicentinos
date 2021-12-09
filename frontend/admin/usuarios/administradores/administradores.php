<?php
	require_once "../../../../backend/conexion.php";
	require_once '../../../../backend/auth/sesiones.php';

    /* 
    Orden de tabla publicaciones:
    <th>ID</th>
    <th>Nombre</th>
    <th>Pais</th>
    <th>Usuario</th>
    <th>Tipo</th>
    <th>Estado</th>
    <th>Acciones</th>
    */

	class Administradores extends DB{

		public function Admins(){
			$ids = $_SESSION['id'];
			$stipo = $_SESSION['tipo'];
			$conexion = $this->conectar();
			$buscarEscritores = $conexion->prepare("SELECT * FROM usuarios ORDER BY Id_Usuario");
			$buscarEscritores->execute();
			$Escritores = $buscarEscritores->fetchAll();

			foreach($Escritores as list($id, $pass, $nombre, $pais, $email, $tipo, $estado)){

				echo" 
                <tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$pais</td>
                    <td>$email</td>
                    <td>";
				if($tipo==3){
					echo "Súper Administrador";
				}
				else if($tipo==2){
					echo "Administrador";
				}
				else if($tipo==1){
					echo "Escritor";
				}
				echo "</td>";
				if($id==$ids){
					if($estado==2){
						echo"<td>
                            Deshabilitado
                            </td>";
					}
					else if($estado==1){
						echo"<td>
                            Habilitado
                            </td>";
					}
				}
				else{
					if($estado==2){
						echo"<td>
                            Deshabilitado<br>
                            <a onclick='habAdmin($id)' style='color:white!important' class='btn btn-success btn-icon-split'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-check'></i>
                                </span>
                                <span class='text'>Habilitar</span>
                            </a>
                            </td>";
					}
					else if($estado==1){
						echo"<td>
                            Habilitado<br>
                            <a onclick='deshabAdmin($id)' style='color:white!important' class='btn btn-secondary btn-icon-split'>
                                <span class='icon text-white-50'>
                                <i class='fas fa-times'></i>
                                </span>
                                <span class='text'>Deshabilitar</span>
                            </a>
                            </td>";
					}
				}

				echo"
                    <td>
                        <a href='../editar/editar-usuario.php?id=$id' class='btn btn-warning btn-icon-split btn-block'><span class='icon text-white-50'><i class='fas fa-edit'></i></span><span class='text'>Editar</span></a><div class='my-2'></div>
                        <a style='color:white' class='btn btn-danger btn-icon-split btn-block' onclick='del($id,$stipo)'><span class='icon text-white-50'><i class='fas fa-trash'></i></span><span class='text'>Borrar</span></a>
                    </td>
                </tr>
            ";
			}
		}
	}

	$usuario = $_SESSION['usuario'];
	if($usuario == null || $usuario = '') header("Location: ../../../../backend/auth/log-out.php");
	else require_once 'administradores.view.php';
?>