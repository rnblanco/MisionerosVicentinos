<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';


	class EliminarPublicacion extends DB{

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

				$buscarPublicacion = $conexion->prepare('SELECT Imagenes FROM publicaciones WHERE id_Publicacion = :id');
				$buscarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarPublicacion->execute();
				$imagen = $buscarPublicacion -> fetch();
				if(file_exists('../images/posts-images/'.$imagen[0])) unlink('../images/posts-images/'.$imagen[0]);
				
				$eliminarPublicacion = $conexion->prepare('DELETE from  publicaciones WHERE  id_Publicacion = :id ');
				$eliminarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarPublicacion->execute();

				if($eliminarPublicacion->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarPublicacion = new EliminarPublicacion();
?>