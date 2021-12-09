<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class DeshabilitarImagen extends DB{

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
				$deshabilitarImagen = $conexion->prepare('UPDATE slider SET Estado="1"  WHERE  id = :id ');
				$deshabilitarImagen->bindParam(':id', $id, PDO::PARAM_STR);
				$deshabilitarImagen->execute();

				if($deshabilitarImagen->rowCount() >= 1){
					http_response_code(200);
					json_encode($data);
				}
				else {
					http_response_code(500);
					json_encode($data);
				}
			}

			else{
				http_response_code(500);
				json_encode($data);
			}
		}
	}
	$deshabilitarImagen = new DeshabilitarImagen();
?>