<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarEco extends DB{

		public function __construct(){

			parent::__construct();

			$texto="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['texto'])) $error = "falta texto";
			else $texto = $_POST['texto'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			//con imagen
			if( $texto!=="" && $id!=="" &&$locacion!==""){

				$conexion = $this->conectar();

				$ecoActual  = $conexion ->prepare ("SELECT Texto from eco WHERE id_eco = :id ");
				$ecoActual->bindParam(':id', $id, PDO::PARAM_STR);
				$ecoActual->execute();
				foreach($ecoActual as list($aTexto)){

					if($aTexto == $texto){

						$imagen = $conexion ->prepare("SELECT imagenes from eco WHERE id_eco = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/default-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								http_response_code(200);
							}
							else http_response_code(400);
						}
					}
					else{

						$imagen = $conexion ->prepare("SELECT imagenes from eco WHERE id_eco = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/default-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarEco = $conexion->prepare(" UPDATE eco SET Texto = :texto WHERE  id_eco = :id ");
								$editarEco->bindParam(':texto', $texto, PDO::PARAM_STR);
								$editarEco->bindParam(':id', $id, PDO::PARAM_STR);
								$editarEco->execute();

								if($editarEco->rowCount() >= 1){
									echo $editarEco->execute();
									http_response_code(200);
								}
								else {
									echo $editarEco->execute();
									http_response_code(404);
								}
							}
							else http_response_code(505);
						}
					}
				}
			}

			else if ($texto!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarEco = $conexion->prepare(" UPDATE eco SET texto = :texto WHERE  id_eco = :id ");

				$editarEco->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarEco->bindParam(':id', $id, PDO::PARAM_STR);
				$editarEco->execute();

				if($editarEco->rowCount() >= 1){
					echo $editarEco->execute();
					http_response_code(200);
				}
				else {
					echo $editarEco->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarEco = new EditarEco();
?>