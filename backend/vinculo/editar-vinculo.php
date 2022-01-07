<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarVinculo extends DB{

		public function __construct(){

			parent::__construct();

			$enlace="";$titulo="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['enlace'])) $error = "falta enlace";
			else $enlace = $_POST['enlace'];

			if(empty($_POST['titulo'])) $error .= "falta titulo";
			else $titulo = $_POST['titulo'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			//con imagen
			if( $enlace!=="" && $titulo!=="" && $id!=="" && $locacion!=""){

				$conexion = $this->conectar();

				$vinculoActual  = $conexion ->prepare ("SELECT Enlace, Titulo from vinculos WHERE id_vinculo = :id ");
				$vinculoActual->bindParam(':id', $id, PDO::PARAM_STR);
				$vinculoActual->execute();
				foreach($vinculoActual as list($aenlace, $atitulo)){

					if($aenlace == $enlace && $atitulo == $titulo){

						$imagen = $conexion ->prepare("SELECT imagenes from vinculos WHERE id_vinculo = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/links-images/' . $imagen;
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

						$imagen = $conexion ->prepare("SELECT imagenes from vinculos WHERE id_vinculo = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/links-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarVinculo = $conexion->prepare(" UPDATE vinculos SET Enlace = :enlace , Titulo = :titulo WHERE  id_vinculo = :id ");
								$editarVinculo->bindParam(':enlace', $enlace, PDO::PARAM_STR);
								$editarVinculo->bindParam(':titulo', $titulo, PDO::PARAM_STR);
								$editarVinculo->bindParam(':id', $id, PDO::PARAM_STR);
								$editarVinculo->execute();

								if($editarVinculo->rowCount() >= 1){
									echo $editarVinculo->execute();
									http_response_code(200);
								}
								else {
									echo $editarVinculo->execute();
									http_response_code(500);
								}
							}
							else http_response_code(404);
						}
					}
				}
			}

			else if ($enlace!=="" && $titulo!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarVinculo = $conexion->prepare(" UPDATE vinculos SET titulo = :titulo ,enlace = :enlace WHERE  id_vinculo = :id ");
				$editarVinculo->bindParam(':titulo', $titulo, PDO::PARAM_STR);
				$editarVinculo->bindParam(':enlace', $enlace, PDO::PARAM_STR);
				$editarVinculo->bindParam(':id', $id, PDO::PARAM_STR);
				$editarVinculo->execute();

				if($editarVinculo->rowCount() >= 1){
					echo $editarVinculo->execute();
					http_response_code(200);
				}
				else {
					echo $editarVinculo->execute();
					http_response_code(500);
				}

			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}

	$editarVinculo = new EditarVinculo();
?>