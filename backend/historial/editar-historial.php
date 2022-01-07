<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarHistorial extends DB{

		public function __construct(){

			parent::__construct();

			$texto="";$pais="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

            if (empty($_POST['texto'])) $error = "falta texto";
            else $texto = $_POST['texto'];

			if(empty($_POST['pais'])) $error .= "falta pais";
			else $pais = $_POST['pais'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			//con imagen
			if( $texto!=="" && $pais!=="" && $id!=="" && $locacion!==""){

				$conexion = $this->conectar();

				$historialActual  = $conexion ->prepare ("SELECT Texto, Pais from historial WHERE id_Historial = :id ");
				$historialActual->bindParam(':id', $id, PDO::PARAM_STR);
				$historialActual->execute();
				foreach($historialActual as list($aTexto, $aPais)){

					if($aTexto == $texto && $aPais == $pais){

						$imagen = $conexion ->prepare("SELECT imagenes from historial WHERE id_Historial = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/countries-images/' . $imagen;
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

						$imagen = $conexion ->prepare("SELECT imagenes from historial WHERE id_Historial = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/countries-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarHistorial = $conexion->prepare(" UPDATE historial SET Texto = :texto ,Pais = :pais WHERE  id_Historial = :id ");
								$editarHistorial->bindParam(':texto', $texto, PDO::PARAM_STR);
								$editarHistorial->bindParam(':pais', $pais, PDO::PARAM_STR);
								$editarHistorial->bindParam(':id', $id, PDO::PARAM_STR);
								$editarHistorial->execute();

								if($editarHistorial->rowCount() >= 1){
									echo $editarHistorial->execute();
									http_response_code(200);
								}
								else {
									echo $editarHistorial->execute();
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

			else if ($texto!=="" && $pais!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarHistorial = $conexion->prepare(" UPDATE historial SET pais = :pais ,texto = :texto WHERE  id_Historial = :id ");
				$editarHistorial->bindParam(':pais', $pais, PDO::PARAM_STR);
				$editarHistorial->bindParam(':texto', $texto, PDO::PARAM_STR);
				$editarHistorial->bindParam(':id', $id, PDO::PARAM_STR);
				$editarHistorial->execute();

				if($editarHistorial->rowCount() >= 1){
					echo $editarHistorial->execute();
					http_response_code(200);
				}
				else {
					echo $editarHistorial->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarHistorial = new EditarHistorial();
?>