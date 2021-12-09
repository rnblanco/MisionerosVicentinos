<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarVision extends DB{

		public function __construct(){

			parent::__construct();

			$texto="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['texto'])){
				$error = "falta texto";
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

			if( $_FILES['img'] ){
				$locacion="hay imagen";
			}
			else{
				$error .= "falta img";
			}

			//con imagen
			if( $texto!=="" && $id!=="" && $locacion!==""){

				$conexion = $this->conectar();

				$visionActual  = $conexion ->prepare ("SELECT Texto from vision WHERE id_vision = :id ");
				$visionActual->bindParam(':id', $id, PDO::PARAM_STR);
				$visionActual->execute();
				foreach($visionActual as list($aTexto)){

					if($aTexto == $texto){

						$imagen = $conexion ->prepare("SELECT imagenes from vision WHERE id_vision = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/default-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								http_response_code(200);
							}
							else{
								http_response_code(505);
							}
						}
					}
					else{

						$imagen = $conexion ->prepare("SELECT imagenes from vision WHERE id_vision = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/default-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarVision = $conexion->prepare(" UPDATE vision SET Texto = :texto WHERE  id_vision = :id ");
								$editarVision->bindParam(':texto', $texto, PDO::PARAM_STR);
								$editarVision->bindParam(':id', $id, PDO::PARAM_STR);
								$editarVision->execute();

								if($editarVision->rowCount() >= 1){
									echo $editarVision->execute();
									http_response_code(200);
								}
								else {
									echo $editarVision->execute();
									http_response_code(505);
								}
							}
							else{
								http_response_code(505);
							}
						}
					}
				}
			}

			else if ($texto!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarPublicacion = $conexion->prepare(" UPDATE vision SET texto = :texto WHERE  id_vision = :id ");

				$editarPublicacion->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
				$editarPublicacion->execute();

				if($editarPublicacion->rowCount() >= 1){
					echo $editarPublicacion->execute();
					http_response_code(200);
				}
				else {
					echo $editarPublicacion->execute();
					http_response_code(500);
				}
			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarVision = new EditarVision();
?>