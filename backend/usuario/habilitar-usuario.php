<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class HabilitarUsuario extends DB{

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
				$habilitarUsuario = $conexion->prepare('UPDATE usuarios SET Estado="1"  WHERE  Id_Usuario = :id ');
				$habilitarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
				$habilitarUsuario->execute();

				if($habilitarUsuario->rowCount() >= 1){
					http_response_code(200);
				}
				else http_response_code(500);
			}

			else http_response_code(500);
			json_encode($data);
		}
	}
	$habilitarUsuario = new HabilitarUsuario();
?>