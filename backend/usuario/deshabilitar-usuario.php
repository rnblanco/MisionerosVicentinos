<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class DeshabilitarUsuario extends DB{

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
				$deshabilitarUsuario = $conexion->prepare('UPDATE usuarios SET Estado="2"  WHERE  Id_Usuario = :id ');
				$deshabilitarUsuario->bindParam(':id', $id, PDO::PARAM_STR);
				$deshabilitarUsuario->execute();

				if($deshabilitarUsuario->rowCount() >= 1){
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
	$deshabilitarUsuario = new DeshabilitarUsuario();
?>