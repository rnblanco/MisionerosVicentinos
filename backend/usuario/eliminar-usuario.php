<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarUsuario extends DB{

		public function __construct(){

			parent::__construct();

			$error="";$id="";$data="";

			if(empty($_POST["id"])){
				$error = " falta id ";
				$data = $error;
			}
			else {
				$id = $_POST["id"];
				$data = $id;
			}

			if( $id != "") {
				$conexion = $this->conectar();
				$buscarPublicaciones = $conexion->prepare('SELECT COUNT(*) FROM publicaciones WHERE Id_Usuario = :id ');
				$buscarPublicaciones->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarPublicaciones->execute();

				if($buscarPublicaciones->fetchColumn() > 0){

					$buscarPubli = $conexion->prepare('SELECT Imagenes FROM publicaciones WHERE Id_Usuario = :id ');
					$buscarPubli->bindParam(':id', $id, PDO::PARAM_STR);
					$buscarPubli->execute();
					$publicaciones = $buscarPubli->fetchAll();
					foreach($publicaciones as $imagen) if(file_exists('../images/posts-images/'.$imagen[0])) unlink('../images/posts-images/'.$imagen[0]);

					$eliminarPublicaciones = $conexion->prepare('DELETE FROM publicaciones WHERE Id_Usuario = :id ');
					$eliminarPublicaciones->bindParam(':id', $id, PDO::PARAM_STR);
					$eliminarPublicaciones->execute();

					if($eliminarPublicaciones->rowCount()>=1){
						$eliminarUsuario = $conexion->prepare('DELETE from  usuarios WHERE  Id_Usuario = :id ');
						$eliminarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
						$eliminarUsuario->execute();

						if($eliminarUsuario->rowCount() >= 1) http_response_code(200);
						else http_response_code(500);
					}
					else http_response_code(400);
				}
				else{

					$eliminarUsuario = $conexion->prepare('DELETE from usuarios WHERE  Id_Usuario = :id ');
					$eliminarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
					$eliminarUsuario->execute();

					if($eliminarUsuario->rowCount() >= 1) http_response_code(200);
					else http_response_code(401);
				}
			}
			else http_response_code(404);
		}
	}
	$eliminarUsuario = new EliminarUsuario();
?>