<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class DeshabilitarPublicacion extends DB{

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
				$deshabilitarPublicacion = $conexion->prepare('UPDATE publicaciones SET Estado="1"  WHERE  id_Publicacion = :id ');
				$deshabilitarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
				$deshabilitarPublicacion->execute();

				if($deshabilitarPublicacion->rowCount() >= 1){
					http_response_code(200);
					echo $deshabilitarPublicacion;
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

	$deshabilitarPublicacion = new DeshabilitarPublicacion();
?>