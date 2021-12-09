<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarSeminario extends DB{

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

				$buscarSeminario = $conexion->prepare('SELECT Imagenes FROM seminarios WHERE Id_Seminario = :id');
				$buscarSeminario->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarSeminario->execute();
				$imagen = $buscarSeminario -> fetch();
				if(file_exists('../images/seminarios-images/'.$imagen[0])) unlink('../images/seminarios-images/'.$imagen[0]);
				
				$eliminarSeminario = $conexion->prepare('DELETE from seminarios WHERE  Id_Seminario = :id ');
				$eliminarSeminario->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarSeminario->execute();

				if($eliminarSeminario->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarSeminario = new EliminarSeminario();
?>