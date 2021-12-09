<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';


	class EditarRadio extends DB{

		public function __construct(){

			parent::__construct();

			$enlace="";$texto="";$id="";$error="";

			if(empty($_POST['enlace'])){
				$error .= "falta enlace";
			}
			else{
				$enlace = $_POST['enlace'];
			}

			if(empty($_POST['texto'])){
				$error .= "falta texto";
			}
			else{
				$texto = $_POST['texto'];
			}

			if(empty($_POST['id'])){
				$error .= "falta id";
			}
			else{
				$id = $_POST['id'];
			}

			if ($texto!=="" && $enlace!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarRadio = $conexion->prepare(" UPDATE radio SET Enlace = :enlace , Texto = :texto WHERE  id_radio = :id ");
				$editarRadio->bindParam(':enlace', $enlace, PDO::PARAM_STR);
				$editarRadio->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarRadio->bindParam(':id', $id, PDO::PARAM_STR);
				$editarRadio->execute();

				if($editarRadio->rowCount() >= 1){
					echo $editarRadio->execute();
					http_response_code(200);
				}
				else {
					echo $editarRadio->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarRadio = new EditarRadio();
?>