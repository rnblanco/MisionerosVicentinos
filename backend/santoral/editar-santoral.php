<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarSantoral extends DB{

		public function __construct(){

			parent::__construct();

			$historia="";$nombre="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['historia'])) $error = "falta historia";
			else $historia = $_POST['historia'];

			if(empty($_POST['nombre'])) $error .= "falta nombre";
			else $nombre = $_POST['nombre'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			//con imagen
			if( $historia!=="" && $nombre!=="" && $id!=="" && $locacion!==""){

				$conexion = $this->conectar();

				$santoralActual  = $conexion ->prepare ("SELECT Nombre, Historia from Santoral WHERE id = :id ");
				$santoralActual->bindParam(':id', $id, PDO::PARAM_STR);
				$santoralActual->execute();
				foreach($santoralActual as list($anombre, $ahistoria)){

					if($ahistoria == $historia && $anombre == $nombre){

						$imagen = $conexion ->prepare("SELECT imagenes from Santoral WHERE id = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/santoral-images/' . $imagen;
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

						$imagen = $conexion ->prepare("SELECT imagenes from santoral WHERE id = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/santoral-images/' . $imagen;
							$success = unlink($locacion);

							if($success){
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarSantoral = $conexion->prepare(" UPDATE Santoral SET Historia = :historia ,Nombre = :nombre WHERE  id = :id ");
								$editarSantoral->bindParam(':historia', $historia, PDO::PARAM_STR);
								$editarSantoral->bindParam(':nombre', $nombre, PDO::PARAM_STR);
								$editarSantoral->bindParam(':id', $id, PDO::PARAM_STR);
								$editarSantoral->execute();

								if($editarSantoral->rowCount() >= 1){
									echo $editarSantoral->execute();
									http_response_code(200);
								}
								else {
									echo $editarSantoral->execute();
									http_response_code(404);
								}
							}
							else{
								http_response_code(500);
							}
						}
					}
				}
			}

			else if ($historia!=="" && $nombre!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarSantoral = $conexion->prepare(" UPDATE santoral SET Nombre = :nombre ,Historia = :historia WHERE  id = :id ");
				$editarSantoral->bindParam(':nombre', $nombre, PDO::PARAM_STR);
				$editarSantoral->bindParam(':historia', $historia, PDO::PARAM_STR);
				$editarSantoral->bindParam(':id', $id, PDO::PARAM_STR);
				$editarSantoral->execute();

				if($editarSantoral->rowCount() >= 1){
					echo $editarSantoral->execute();
					http_response_code(200);
				}
				else {
					echo $editarSantoral->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarSantoral = new EditarSantoral();
?>