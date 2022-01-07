<?php
	include_once '../auth/sesiones.php';
	require_once '../conexion.php';


	class EditarPublicacion extends DB{

		public function __construct(){

			parent::__construct();

			$seccion="";$titulo="";$cuerpo="";$locacion="";$id="";$error="";
			$test="";$ext="";$name="";$nuevalocacion="";

			if(empty($_POST['seccion'])) $error = "falta seccion";
			else $seccion = $_POST['seccion'];

			if(empty($_POST['title'])) $error .= "falta title";
			else $titulo = $_POST['title'];

			if(empty($_POST['body'])) $error .= "falta body";
			else $cuerpo = $_POST['body'];

			if(empty($_POST['id'])) $error .= "falta id";
			else $id = $_POST['id'];

			if( $_FILES['img'] ) $locacion="hay imagen";
			else$error .= "falta img";

			//con imagen
			if( $locacion!=="" && $cuerpo!=="" && $titulo!=="" && $seccion!=="" && $id!==""){

				$conexion = $this->conectar();
				$publicacionActual  = $conexion ->prepare ("SELECT Titulo, Cuerpo, Seccion from publicaciones WHERE id_Publicacion = :id ");
				$publicacionActual->bindParam(':id', $id, PDO::PARAM_STR);
				$publicacionActual->execute();
				foreach($publicacionActual as list($aTitulo, $aCuerpo, $aSeccion)){

					if($aTitulo==$titulo && $aCuerpo==$cuerpo && $aSeccion==$seccion){

						$imagen = $conexion ->prepare("SELECT imagenes from publicaciones WHERE id_Publicacion = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/posts-images/' . $imagen;
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

						$imagen = $conexion ->prepare("SELECT imagenes from publicaciones WHERE id_Publicacion = :id ");
						$imagen->bindParam(':id', $id, PDO::PARAM_STR);
						$imagen->execute();

						foreach($imagen as list($imagen)){
							$locacion = '../images/posts-images/' . $imagen;
							$success = unlink($locacion);
							if($success){
								unlink($locacion);
								move_uploaded_file($_FILES['img']['tmp_name'], $locacion);
								$editarPublicacion = $conexion->prepare(" UPDATE publicaciones SET Titulo = :titulo ,Cuerpo = :cuerpo ,Seccion= :seccion WHERE  id_Publicacion = :id ");
								$editarPublicacion->bindParam(':titulo', $titulo, PDO::PARAM_STR);
								$editarPublicacion->bindParam(':cuerpo', $cuerpo, PDO::PARAM_STR);
								$editarPublicacion->bindParam(':seccion', $seccion, PDO::PARAM_STR);
								$editarPublicacion->bindParam(':id', $id, PDO::PARAM_STR);
								$editarPublicacion->execute();

								if($editarPublicacion->rowCount() >= 1){
									echo $editarPublicacion->execute();
									http_response_code(200);
								}
								else {
									echo $editarPublicacion->execute();
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

			else if ($cuerpo!=="" && $titulo!=="" && $seccion!=="" && $id!==""){

				$conexion = $this->conectar();
				$editarPublicacion = $conexion->prepare(" UPDATE publicaciones SET Titulo = :titulo ,Cuerpo = :cuerpo ,Seccion= :seccion WHERE  id_Publicacion = :id ");
				$editarPublicacion->bindParam(':titulo', $titulo, PDO::PARAM_STR);
				$editarPublicacion->bindParam(':cuerpo', $cuerpo, PDO::PARAM_STR);
				$editarPublicacion->bindParam(':seccion', $seccion, PDO::PARAM_STR);
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
	$editarPublicacion = new EditarPublicacion();
?>