<?php   
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EliminarHistorial extends DB{

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
				$buscarHistorial = $conexion->prepare('SELECT Imagenes FROM historial WHERE Id_Historial = :id');
				$buscarHistorial->bindParam(':id', $id, PDO::PARAM_STR);
				$buscarHistorial->execute();
				$imagen = $buscarHistorial -> fetch();
				if(file_exists('../images/countries-images/'.$imagen[0])) unlink('../images/countries-images/'.$imagen[0]);

				$eliminarHistorial = $conexion->prepare('DELETE FROM  historial WHERE  Id_Historial = :id ');
				$eliminarHistorial->bindParam(':id', $id, PDO::PARAM_STR);
				$eliminarHistorial->execute();

				if($eliminarHistorial->rowCount() >= 1) http_response_code(200);
				else http_response_code(500);
			}
			else http_response_code(500);
		}
	}
	$eliminarHistorial = new EliminarHistorial();
?>