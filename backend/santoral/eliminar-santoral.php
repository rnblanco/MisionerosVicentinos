<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarSantoral extends DB{

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

				$buscarSantoral = $conexion->prepare('SELECT Imagenes FROM santoral WHERE id = :id');
				$buscarSantoral->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarSantoral->execute();
				$imagen = $buscarSantoral -> fetch();
				if(file_exists('../images/santoral-images/'.$imagen[0])) unlink('../images/santoral-images/'.$imagen[0]);
				
				$eliminarSantoral = $conexion->prepare('DELETE from  santoral WHERE id = :id ');
				$eliminarSantoral->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarSantoral->execute();

				if($eliminarSantoral->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarSantoral = new EliminarSantoral();
?>