<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class HabilitarPublicacion extends DB{

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
				$habilitarPublicacion = $conexion->prepare('UPDATE publicaciones SET Estado="2"  WHERE  id_Publicacion = :id ');
				$habilitarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
				$habilitarPublicacion->execute();

				if($habilitarPublicacion->rowCount() >= 1){
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
	$habilitarPublicacion = new HabilitarPublicacion();
?>