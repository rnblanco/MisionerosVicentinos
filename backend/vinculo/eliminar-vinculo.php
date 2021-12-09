<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarVinculo extends DB{

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

				$buscarVinculo = $conexion->prepare('SELECT Imagenes FROM vinculos WHERE Id_Vinculo = :id');
				$buscarVinculo->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarVinculo->execute();
				$imagen = $buscarVinculo -> fetch();
				if(file_exists('../images/links-images/'.$imagen[0])) unlink('../images/links-images/'.$imagen[0]);
				
				$eliminarVinculo = $conexion->prepare('DELETE FROM vinculos WHERE  Id_Vinculo = :id ');
				$eliminarVinculo->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarVinculo->execute();

				if($eliminarVinculo->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarVinculo = new EliminarVinculo();
?>