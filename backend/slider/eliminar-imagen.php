<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarImagen extends DB{

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

				$buscarImagen = $conexion->prepare('SELECT Imagenes FROM slider WHERE ID = :id');
				$buscarImagen->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarImagen->execute();
				$imagen = $buscarImagen -> fetch();
				if(file_exists('../images/slider-images/'.$imagen[0])) unlink('../images/slider-images/'.$imagen[0]);
				
				$eliminarImagen = $conexion->prepare('DELETE from  slider WHERE ID = :id ');
				$eliminarImagen->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarImagen->execute();

				if($eliminarImagen->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarImagen = new EliminarImagen();
?>