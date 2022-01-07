<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarMision extends DB{

		public function __construct(){

			parent::__construct();

			$texto="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['texto'])) $error = "falta texto";
			else
				$texto = $_POST['texto'];

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

				$misionActual  = $conexion ->prepare ("SELECT Texto from mision WHERE id_mision = :id ");
				$misionActual->bindParam(':id', $id, PDO::PARAM_STR);
				$misionActual->execute();
				foreach($misionActual as list($aTexto)){

					if($aTexto == $texto){

						$imagen = $conexion ->prepare("SELECT imagenes from mision WHERE id_mision = :id ");
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

						$imagen = $conexion ->prepare("SELECT imagenes from mision WHERE id_mision = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/default-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarMision = $conexion->prepare(" UPDATE mision SET Texto = :texto WHERE  id_mision = :id ");
								$editarMision->bindParam(':texto', $texto, PDO::PARAM_STR);
								$editarMision->bindParam(':id', $id, PDO::PARAM_STR);
								$editarMision->execute();

								if($editarMision->rowCount() >= 1){
									echo $editarMision->execute();
									http_response_code(200);
								}
								else {
									echo $editarMision->execute();
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
				$editarMision = $conexion->prepare(" UPDATE mision SET texto = :texto WHERE  id_mision = :id ");

				$editarMision->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarMision->bindParam(':id', $id, PDO::PARAM_STR);
				$editarMision->execute();

				if($editarMision->rowCount() >= 1){
					echo $editarMision->execute();
					http_response_code(200);
				}
				else {
					echo $editarMision->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarMision = new EditarMision();
?>