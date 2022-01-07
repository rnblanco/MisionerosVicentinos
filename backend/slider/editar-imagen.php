<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarImagen extends DB{
		public function __construct(){

			parent::__construct();

			$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $locacion!=="" && $id!==""){

				$conexion = $this->conectar();
				$imagen = $conexion ->prepare("SELECT imagenes from slider WHERE id = :id ");
				$imagen->bindParam(':id', $id, PDO::PARAM_STR);
				$imagen->execute();

				foreach($imagen as list($imagen)){
					$locacion = '../images/slider-images/' . $imagen;
					$success = unlink($locacion);
					if($success){
						unlink($locacion);
						move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
						http_response_code(200);
					}
					else http_response_code(505);}
			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarImagen = new EditarImagen();
?>