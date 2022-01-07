<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';

	class EditarSeminario extends DB{

		public function __construct(){

			parent::__construct();

			$cuerpo="";$titulo="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['cuerpo'])) $error = "falta cuerpo";
			else $cuerpo = $_POST['cuerpo'];

			if(empty($_POST['titulo'])) $error .= "falta titulo";
			else $titulo = $_POST['titulo'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else $error .= "falta img";

			//con imagen
			if( $cuerpo!=="" && $titulo!=="" && $id!=="" && $locacion!==""){

				$conexion = $this->conectar();

				$seminarioActual  = $conexion ->prepare ("SELECT Cuerpo, Titulo from seminarios WHERE id_Seminario = :id ");
				$seminarioActual->bindParam(':id', $id, PDO::PARAM_STR);
				$seminarioActual->execute();
				foreach($seminarioActual as list($acuerpo, $atitulo)){

					if($acuerpo == $cuerpo && $atitulo == $titulo){

						$imagen = $conexion ->prepare("SELECT imagenes from seminarios WHERE id_Seminario = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/seminarios-images/' . $imagen;
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

						$imagen = $conexion ->prepare("SELECT imagenes from seminarios WHERE id_Seminario = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/seminarios-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarSeminario = $conexion->prepare(" UPDATE seminarios SET cuerpo = :cuerpo ,titulo = :titulo WHERE  id_Seminario = :id ");
								$editarSeminario->bindParam(':cuerpo', $cuerpo, PDO::PARAM_STR);
								$editarSeminario->bindParam(':titulo', $titulo, PDO::PARAM_STR);
								$editarSeminario->bindParam(':id', $id, PDO::PARAM_STR);
								$editarSeminario->execute();

								if($editarSeminario->rowCount() >= 1){
									echo $editarSeminario->execute();
									http_response_code(200);
								}
								else {
									echo $editarSeminario->execute();
									http_response_code(505);
								}
							}
							else http_response_code(505);
						}
					}
				}
			}

			else if ($cuerpo!=="" && $titulo!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarSeminario = $conexion->prepare(" UPDATE seminarios SET titulo = :titulo ,cuerpo = :cuerpo WHERE  id_Seminario = :id ");
				$editarSeminario->bindParam(':titulo', $titulo, PDO::PARAM_STR);
				$editarSeminario->bindParam(':cuerpo', $cuerpo, PDO::PARAM_STR);
				$editarSeminario->bindParam(':id', $id, PDO::PARAM_STR);
				$editarSeminario->execute();

				if($editarSeminario->rowCount() >= 1){
					echo $editarSeminario->execute();
					http_response_code(200);
				}
				else {
					echo $editarSeminario->execute();
					http_response_code(500);
				}
			}

			else{
				http_response_code(404);
				echo $error;
			}
		}
	}
	$editarSeminario = new EditarSeminario();
?>