<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class HabilitarImagen extends DB{
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
				$habilitarImagen = $conexion->prepare('UPDATE slider SET Estado="2"  WHERE  ID = :id ');
				$habilitarImagen->bindParam(':id', $id, PDO::PARAM_STR);
				$habilitarImagen->execute();

				if($habilitarImagen->rowCount() >= 1){
					http_response_code(200);
				}
				else {
					http_response_code(500);
				}
			}

			else{
				http_response_code(500);
			}
			json_encode($data);
		}
	}
	$habilitarImagen = new HabilitarImagen();
?>